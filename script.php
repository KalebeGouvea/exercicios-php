<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
//print_r($categorias);

$nome = $_POST["nome"];
$idade = $_POST["idade"];

if (empty($nome)) {
    echo "O nome não pode ser vazio.";
    return;
}

if (strlen($nome) < 3) {
    echo "O nome não pode ser inferior a 3 caracteres";
    return;
}

if (strlen($nome) > 40) {
    echo "O nome não pode ser superior a 40 caracteres";
    return;
}

if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i < count($categorias); $i++){
        if ($categorias[$i] == 'infantil'){
            echo "O nadador " .$nome. " compete na categoria infantil";
        }
    }
}

elseif ($idade >= 13 && $idade <= 18) 
{
    for ($i = 0; $i < count($categorias); $i++)
    {
        if ($categorias[$i] == 'adolescente')
        {
            echo "O nadador " .$nome. " compete na categoria adolescente";
        }
    }
}

else 
{
    for ($i = 0; $i < count($categorias); $i++)
    {
        if ($categorias[$i] == 'adulto')
        {
            echo "O nadador " .$nome. " compete na categoria adulto";
        }
    }
}