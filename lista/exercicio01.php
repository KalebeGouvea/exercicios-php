<?php
//Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, 
//negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".

$num = 4;

if ($num > 0){
    $resultado = "Valor Positivo";
} elseif ($num < 0){
    $resultado = "Valor Negativo";
} else {
    $resultado = "Igual a Zero";
}
echo $resultado;
?>