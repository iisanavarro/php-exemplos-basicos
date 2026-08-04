<?php

//Criando variaveis
$idade = 19;
$temDocumento = false;

//Estrutura de decisao (Operador E)
if ($idade >=18 && $temDocumento) {
    echo "Pode tirar a carteira";
} else {
    echo "Não pode tirar a carteira";
}

//Estrutura de decisao (Operador OU)
if($idade >=18 || $temDocumento) {
    echo "\nPode tirar a carteira";
} else {
    echo "Não pode tirar a carteira";
}

// Operador de negação !
$presente = false;

if (!$presente) {
    echo "\n O aluno esta presente";
} else {
    echo "\n O aluno esta ausente";
}


