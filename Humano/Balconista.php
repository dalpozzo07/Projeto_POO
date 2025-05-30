<?php

require_once 'Humano.php';

class Balconista extends Humano{
    public $salario;

    function __construct($nome, $idade, $endereco, $contato, $salario){
        parent::__construct($nome, $idade, $endereco, $contato);
        $this->salario = $salario;
    }


}