<!DOCTYPE html> 
<html lang="pt-br"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Cadastro de usuário</title> 
</head> 
<body> 

<form method="post" action=""> 

    <!-- Campo nome --> 
    <label for="nome">Nome:</label> 
    <input type="text" name="nome" required> 
 
    <!-- Campo Senha --> 
    <label for="senha">Senha:</label> 
    <input type="password" name="senha" required> 
 
    <!-- Botão de enviar --> 
    <button type="submit">Cadastrar</button> 

</form> 
 
<!-- Lógica de cadastro --> 
<?php 

// Se o usuário enviou o formulário, eu capturo os valores 
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

    // Recebo os valores 
    $nome = $_POST['nome']; 
    $senha = $_POST['senha']; 
 
    // Gravando a informação recebida em um arquivo de texto 
    $arquivo = fopen('usuarios.txt', 'a'); 
 
    // Cria uma linha com o nome e senha separados por ;
    $linha = $nome . ';' . $senha . "\n"; 
 
    // Escreve a linha no arquivo 
    fwrite($arquivo, $linha); 
 
    // Fecha o arquivo 
    fclose($arquivo); 
 
    // Mensagem de sucesso 
    echo "<p>Usuario cadastrado com sucesso!</p>";
} 

?> 
 
</body> 
</html>