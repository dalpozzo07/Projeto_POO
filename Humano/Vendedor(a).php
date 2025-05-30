<?php

require_once 'Humano.php';

class Vendedor extends Humano{
    public $salario;

    function __construct($nome, $idade, $endereco, $contato, $salario){
        parent::__construct($nome, $idade, $endereco, $contato);
        $this->salario = $salario;
    }

}