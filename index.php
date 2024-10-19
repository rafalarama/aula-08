<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08</title>
</head>
<body>
    <h1>Introdução à programação backend</h1>
    <?php
        echo'Olá Rafael';
        echo '<br/>'.'<br/>';
        //Cria uma variável ano nascimento
        $ano_nascimento = 1982;
        //Cria uma variável ano atual
        $ano_atual=2024;
        //Cria uma variável idade recebendo o calculo das variaveis
        $idade = $ano_atual - $ano_nascimento;
        //no php o caracter . concatena strings
        echo 'Você possui' .$idade .'anos.'
    ?>
    <br/>
    <a href="formulario.php">Ir para o formulário</a>
</body>
</html>