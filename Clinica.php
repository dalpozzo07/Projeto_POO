<?php

require_once 'Animal/Cachorro.php';
require_once 'Animal/Gato.php';
require_once 'Animal/Hamster.php';
require_once 'Humano/Vendedor(a).php';
require_once 'Humano/Veterinário(a).php';
require_once 'Humano/Balconista.php';
require_once 'Produtos/Produtos.php';
require_once 'Produtos/Vendas.php';




//animais:

$cachorro = new Cachorro('Cerberus', 'Preto', 'Doberman', '4', '30 kg', '1 M');
$gato = new Gato('Neko', 'Laranja', 'Orange', '4', '5 kg', '30 Cm');
$hamster = new Hamster('Hammond', 'Amarelo', 'Wrecking ball', '4', '3 kg', '20 cm');

//humanos:
$vendedor = new Vendedor('Jake', '30', 'Rua das Flores', '1234-5678', 'R$ 1000');
$veterinario = new Veterinário('Maria', '30', 'Rua das Flores', '1234-5678', 'R$ 2000');
$balconista = new Balconista('José', '30', 'Rua das Flores', '1234-5678', 'R$ 3000');



    while(true){
        echo "    Balcão \n";
        echo " ============== \n";
        echo " 1- Menu de venda     \n";
        echo " 2- Veterinário \n";
        echo " 3- Quem eu sou \n";
        echo " 4-   Sair \n";
        echo " ============== \n";

        $opcao = readline( "Opção: \n");

        switch($opcao){
            case '1':
                    echo "    Vendas  \n";
                    echo " ============== \n";
                    echo " 1- Vender \n";
                    echo " 2- Mostrar \n";
                    echo " 3-Quem eu sou \n";
                    echo "4- Voltar \n";
                    echo " ============== \n";
                    $opcao2 = readline("Opção: \n");

                    switch($opcao2){

                        case '1':
                            vender();
                            break;

                        case '2':
                            mostrarProdutos();
                            break;

                        case '3':
                        $cachorro->falar();
                        $cachorro->descrever();
                        $vendedor->descricao();
                        break;

                        case '4':
                            break;

                    }
                    break;

                case '2':
                    
                    echo "   Veterinário  \n";
                    echo " ============== \n";
                    echo " 1- Fazer consulta \n";
                    echo " 2- Tratamento \n";
                    echo " 3-Quem eu sou \n";
                    echo " 4- Voltar \n";
                    echo " ============== \n";
                    $opcao3 = readline("Opção: \n");
                        switch($opcao3){

                            case '1':
                                echo "O que seu humano aparenta? \n";
                                $descricao = readline ("Descreva: \n");
                                echo "Ele tem câncer \n";
                                break;

                            case '2':
                                echo "Deseja deixar seu humano para tratamento? \n";
                                echo " 1-Sim \n 2-Não \n";

                                $tratamento = readline("Opção: ");


                                switch($tratamento){
                                    case '1':
                                        echo "Seu humano foi fazer o tratamento e acabou fugindo \n";
                                        break;
                                    case '2':
                                        break;
                                }
                            break;

                            case '3':
                            $gato->falar();
                            $gato->descrever();
                            $veterinario->descricao();
                            break;

                            case '4':
                            break ;

                    }
                    break;

            case '3':
                $hamster->falar();
                $hamster->descrever();
                $balconista->descricao();
                break;
            
            case '4':
                exit;

        }


    }


