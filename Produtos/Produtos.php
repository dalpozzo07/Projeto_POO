<?php

class Produtos{

    public $produto;
    public $preco;
    public $quantidade;
    public $produtos = [];


    public function adicionarProduto($produto, $preco, $quantidade){
        $this->produtos[] = new Produto($produto, $preco, $quantidade);
    }




}