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
        return "O nome é " . $this->nome . " da raça " . $this->raca . " e a cor é " . $this->cor . " e o peso é " . $this->peso . " kg e o tamanho é " . $this->tamanho . " cm";
    }

    public function Falar(){


    }


}