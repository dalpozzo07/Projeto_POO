<?php

class Humano{

    public $nome;
    public $idade;
    public $endereco;
    public $contato;

    function __construct($nome, $idade, $endereco, $contato){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->endereco = $endereco;
        $this->contato = $contato;
        
    }

    public function descricao(){
        echo "O nome do meu humano é $this->nome, sua idade é $this->idade \n";
    }

}