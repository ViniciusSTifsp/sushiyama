<?php
require "../repositorio/conexao.php";
require "../Modelo/Produto.php";
require "../repositorio/produtoRepositorio.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $imagem = $_POST["imagem"];
    $tipo = $_POST["tipo"];

    $produto = new Produto(
        NULL,
        $nome,
        $descricao,
        $preco,
        $imagem,
        $tipo
    );

    // Certifique-se de que $conn representa uma conexão válida com o banco de dados
    $produtoRepositorio = new produtoRepositorio($conn);
    $produtoRepositorio->cadastrar($produto);
    header("Location: ../visao/cadastrar-produto-sucesso.php");
}
?>
