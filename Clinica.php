<?php

require_once 'Animal/Cachorro.php';
require_once 'Animal/Gato.php';
require_once 'Animal/Hamster.php';
require_once 'Humano/Vendedor(a).php';
require_once 'Humano/Veterinário(a).php';
require_once 'Humano/Balconista.php';
require_once 'Produtos/Produtos.php';




//animais:

$cachorro = new Cachorro('Cerberus', 'Preto', 'Doberman', '4', '30 kg', '1 M');
$gato = new Gato('Neko', 'Laranja', 'Orange', '4', '5 kg', '30 Cm');
$hamster = new Hamster('Hammond', 'Amarelo', 'Wrecking ball', '4', '3 kg', '20 cm');

//humanos:
$vendedor = new Vendedor('João', '30', 'Rua das Flores', '1234-5678', 'R$ 1000');
$veterinario = new Veterinário('Maria', '30', 'Rua das Flores', '1234-5678', 'R$ 2000');
$balconista = new Balconista('Maria', '30', 'Rua das Flores', '1234-5678', 'R$ 3000');

//produtos:
$produto1 = new Produtos('Ração de Humano', 'R$ 100', '10', 'Humanos');
$produto1->AdicionarProduto('Ração de Humano', 'R$ 100', '10', 'Humanos');

while(true){
    




}




