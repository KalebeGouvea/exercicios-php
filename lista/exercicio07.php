<?php
/*Faça um algoritmo em PHP onde verifica se o valor da variável A é maior ou menor que o valor da variável B. 
A mensagem a ser impressa deve ser “A maior que B” ou “A menor que B”.*/
$valA = 7;
$valB = 3;
if ($valA > $valB) {
    echo "A maior que B";
} elseif ($valA < $valB) {
    echo "A menor que B";
} else {
    echo "A igual a B";
}
?>