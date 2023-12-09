<?php
class Produto {
    private ?int $cod_produto;
    private string $nome;
    private string $descricao;
    private string $imagem;
    private float $preco;
    private string $tipo;

    public function __construct(
        ?int $cod_produto,
        string $nome,
        string $descricao,
        float $preco,
        string $imagem,
        string $tipo
    ) {
        $this->cod_produto = $cod_produto;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->imagem = $imagem;
        $this->tipo = $tipo;
    }

    /**
     * Get the value of cod_produto
     */ 
    public function getCod_produto(): ?int {
        return $this->cod_produto;
    }

    /**
     * Set the value of cod_produto
     *
     * @param int $cod_produto
     *
     * @return self
     */ 
    public function setCod_produto(?int $cod_produto): self {
        $this->cod_produto = $cod_produto;
        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome(): string {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @param string $nome
     *
     * @return self
     */ 
    public function setNome(string $nome): self {
        $this->nome = $nome;
        return $this;
    }

    /**
     * Get the value of descricao
     */ 
    public function getDescricao(): string {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @param string $descricao
     *
     * @return self
     */ 
    public function setDescricao(string $descricao): self {
        $this->descricao = $descricao;
        return $this;
    }

    /**
     * Get the value of imagem
     */ 
    public function getImagem(): string {
        return $this->imagem;
    }

    /**
     * Set the value of imagem
     *
     * @param string $imagem
     *
     * @return self
     */ 
    public function setImagem(string $imagem): self {
        $this->imagem = $imagem;
        return $this;
    }

    /**
     * Get the value of preco
     */ 
    public function getPreco(): float {
        return $this->preco;
    }

    /**
     * Set the value of preco
     *
     * @param float $preco
     *
     * @return self
     */ 
    public function setPreco(float $preco): self {
        $this->preco = $preco;
        return $this;
    }

     /**
     * Get the value of tipo
     */ 
    public function getTipo(): string {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @param string $tipo
     *
     * @return self
     */ 
    public function setTipo(string $tipo): self {
        $this->tipo = $tipo;
        return $this;
    }
}
?>