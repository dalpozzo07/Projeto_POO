<?php

class Produtos{

    public $nome;
    public $preco;
    public $quantidade;
    public $categoria;
    public $produtos = [];

    function __construct($nome, $preco, $quantidade, $categoria){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->categoria = $categoria;
    
    }

    public function AdicionarProduto($nome, $preco, $quantidade, $categoria){
        $this->produtos[] = new Produto($nome, $preco, $quantidade, $categoria);
    }




}