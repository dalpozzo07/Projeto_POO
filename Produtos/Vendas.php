
<?php

require_once 'Produtos.php';


$produtos = [
    ['nome' => 'Ração para Humano', 'preco' => 50.0, 'quantidade' => 10],
    ['nome' => 'Coleira', 'preco' => 25.0, 'quantidade' => 5],
    ['nome' => 'Brinquedo', 'preco' => 15.0, 'quantidade' => 8],
];

function mostrarProdutos() {
    global $produtos;
    foreach ($produtos as $index => $produto) {
        echo "$index - {$produto['nome']} | R$ {$produto['preco']} | Estoque: {$produto['quantidade']}\n";
    }
}

function vender() {
    global $produtos;

    mostrarProdutos();

    $escolha = readline("Qual produto deseja vender? (Digite o número): ");
    
    if (!isset($produtos[$escolha])) {
        echo "Produto inválido.\n";
        return;
    }

    $quantidade = readline("Quantos deseja vender? ");
    
    if ($quantidade > $produtos[$escolha]['quantidade']) {
        echo "Estoque insuficiente.\n";
        return;
    }

    $produtos[$escolha]['quantidade'] -= $quantidade;
    $total = $quantidade * $produtos[$escolha]['preco'];
    echo "Venda realizada com sucesso! Total: R$ $total\n";
}
