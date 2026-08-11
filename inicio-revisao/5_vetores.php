<?php

// vetor (array simples)
$frutas = ["maça", "banana", "uva"];

// Exibindo (usando laço)
foreach ($frutas as $indice => $frutas) {
    echo "posiçao $indice: $frutas\n"; 
}

// matriz (array completo "Linhas  e colunas)
$matriz = [
["Max verstappen", "Lando norris", "Oscar piastri"],
[ "Charlies leclerc", "Lewis hamilton", "George russel"],
["Fernando alonso", "Carlos sainz", "Ayrton senna"]
];

// exibindo nome dos pilotos
foreach ($matriz as $linha) {
    foreach ($linha as $piloto) {
        echo $piloto . " | ";
    }
}

