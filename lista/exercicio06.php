<?php
/*Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem 
crescente em relação aos seus valores. Exemplo, para A=5, B=4. Você deve 
imprimir na tela: "4 5".*/
$valA = 5;
$valB = 4;
if ($valA > $valB) {
    echo $valB . " " . $valA;
} else {
    echo $valA . " " .$valB;
}
?>