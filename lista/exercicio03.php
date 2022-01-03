<?php
/*Crie um algoritmo que solicite um número, e faça o cálculo fatorial do mesmo, exiba o resultado na tela. Ex:
Entrada = 3
Processamento: (3 * 2) * 1
Saída: 6*/
$num = 8;
$fat = 1;
for ($i = 1; $i <= $num; $i++){
    $fat *= $i;
}
echo $fat;
?>