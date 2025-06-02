<?php

class Animal{
    public $nome;
    public $cor;
    public $raca;
    public $quantidadeDePatas;
    public $peso;
    public $tamanho;

    function __construct($nome, $cor, $raca, $quantidadeDePatas, $peso, $tamanho){
        $this->nome = $nome;
        $this->cor = $cor;
        $this->raca = $raca;
        $this->quantidadeDePatas = $quantidadeDePatas;
        $this->peso = $peso;
        $this->tamanho = $tamanho;
        
    }

    public function Falar(){

    }

    public function Descrever(){
        echo "Meu nome é $this->nome, sou da raça $this->raca \n";
    }


}