<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Maioridade</title>
</head>
<body>
    <form method="post" action="">
        <!-- Campo Nome -->
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

       <!-- Campo Ano de Nascimento -->
       <label for="ano_nascimento">Ano de Nascimento:</label>
       <input type="number" name="ano_nascimento" required>

       <!-- Botão de Envio -->
       <input type="submit" value="Verificar Maioridade">
    </form>

    <?php

    // Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Recebe os valores do formulário
        $nome = $_POST['nome'];
        $ano_nascimento = $_POST['ano_nascimento'];

        //Calcula a idade subtraindo o ano de nascimento do ano atual
        $idade = date('Y') - $ano_nascimento;

        // Verifica se a idade é maior ou igual a 18
        if ($idade >= 18) {
            echo "<p>$nome, você foi cadastrado com sucesso!.</p>";
        } else {
            echo "<p>Desculpe $nome, você precisa ser maior de idade para se cadastrar</p>";
        }
    }

    ?>
</body>
</html>
