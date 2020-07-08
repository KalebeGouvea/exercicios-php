<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulário de inscrição</title>
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

        <form action="script.php" method="POST">
        <?php
            $mensagemDeErro = isset($_SESSION["mensagem-de-erro"]) ? $_SESSION["mensagem-de-erro"] : '';
            if (!empty($mensagemDeErro)) {
                echo $mensagemDeErro;
            }
        ?>
            <p>Your name: <input type="text" name="nome"></p>
            <p>Your age: <input type="text" name="idade"></p>
            <p><input type="submit"></p>
        </form>
    </body>
</html>