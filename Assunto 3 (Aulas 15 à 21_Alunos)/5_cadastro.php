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
     <label for="senha">Nome:</label>
    <input type="password" name="senha" required>

    <!-- Botão de enviar -->
     <button type="submit">Cadastrar</button>
</form>

<!-- Lógica de cadastro -->
<?php
//Se o usuário enviou (Formulário) eu capturo os valores
if ($_SERVER['REQUEST_METHOD'] =='POST') {
    //recebo os valores
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    //Gravando a informação recebida em um arquivo de texto
    // O "fopen" significa (file open ou abrir arquivo) e o 'a' append significa acrescentar
    $arquivo = fopen('usuarios.txt', 'a');

    //cria uma linha com o nome e senhas separados por;
    $linha = $nome . ';' . $senha . '\n';

    //Escreve a linha no arquivo (insere um fato)
    fwrite($arquivo, $linha);

 //Fecha o arquivo
    fclose($arquivo);

//Mensagem de sucesso (feedback visivel para o usuario)
echo '<p>Usuario cadastrado com sucesso!<p>'
}
?>

    
</body>
</html>