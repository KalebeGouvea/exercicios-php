<?php

function divisao ($n1, $n2) 
{
    if ($n1 == 0 || $n2 == 0) 
    {
        throw new Exception("Nenhum dos números podem ser zero.");
    }
    else 
    {
        return $n1/$n2;
    }
}

try {
    echo divisao (0, 4);
} catch (Exception $e) {
    echo $e->getMessage();
    die ();
}

