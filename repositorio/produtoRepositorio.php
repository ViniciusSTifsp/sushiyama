<?php
class produtoRepositorio {
    private $conn; // Sua conexão com o banco de dados
    
    public function __construct($conn) {
        $this->conn = $conn;
    }
    
    public function listarProdutos() {
        $sql = "SELECT * FROM produtos";
        $result = $this->conn->query($sql);
        
        $produtos = array();
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $produto = new Produto(
                    $row['cod_produto'],
                    $row['nome'],
                    $row['descricao'],
                    $row['preco'],
                    $row['imagem'],
                    $row['tipo']
                );
                $produtos[] = $produto;
            }
        }
        
        return $produtos;
    }

    public function cadastrar(Produto $produto)
    {
        $sql = "INSERT INTO produtos (cod_produto, nome, descricao, preco, imagem, tipo) VALUES (?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);

        if (!$stmt) {
            // O prepare() não foi executado com sucesso
            die("Ocorreu um erro ao preparar a consulta SQL.");
        }

        $stmt->bind_param("isssss",$produto->getCod_produto(), $produto->getNome(), $produto->getDescricao(), $produto->getPreco(), $produto->getImagem(),$produto->getTipo());
        $stmt->execute();
        $stmt->close();
    }
}
?>