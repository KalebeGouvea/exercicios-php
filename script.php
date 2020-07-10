<?php

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
//print_r($categorias);

$nome = $_POST["nome"];
$idade = $_POST["idade"];

if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i < count($categorias); $i++){
        if ($categorias[$i] == 'infantil'){
            $_SESSION["mensagem-de-sucesso"] = "O nadador " .$nome. " compete na categoria " .$categorias[$i];
            header ('Location: index.php');
            return;
        }
    }
}

elseif ($idade >= 13 && $idade <= 18) 
{
    for ($i = 0; $i < count($categorias); $i++)
    {
        if ($categorias[$i] == 'adolescente')
        {
            $_SESSION["mensagem-de-sucesso"] = "O nadador " .$nome. " compete na categoria " .$categorias[$i];
            header ('Location: index.php');
            return;
        }
    }
}

else 
{
    for ($i = 0; $i < count($categorias); $i++)
    {
        if ($categorias[$i] == 'adulto')
        {
            $_SESSION["mensagem-de-sucesso"] = "O nadador " .$nome. " compete na categoria " .$categorias[$i];
            header ('Location: index.php');
            return;
        }
    }
}