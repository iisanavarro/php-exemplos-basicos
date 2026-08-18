<?php

$preco = readline("Digite o preço do produto: ");
$quantidade = readline("Digite a quantidade comprada: ");

$total = $preco * $quantidade;

if ($total >= 200) {
    $desconto = $total * 0.10;
    $total = $total - $desconto;

    echo "Desconto: R$ $desconto \n";
}

echo "Valor final da compra: R$ $total";
?> 