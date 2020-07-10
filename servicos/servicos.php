<?php

declare('strict_type=1')
function validaNome (string $nome) : bool {

    if (empty($nome)) {
        $_SESSION["mensagem-de-erro"] = "O nome não pode ser vazio";
        return false;
    }
    
    else if (strlen($nome) < 3) {
        $_SESSION["mensagem-de-erro"] = "O nome não pode ser inferior a 3 caracteres";
        return false;
    }
    
    else if (strlen($nome) > 40) {
        $_SESSION["mensagem-de-erro"] = "O nome não pode ser superior a 40 caracteres";
        return false;
    }
    return true;
}

function validaIdade (string $idade) : bool {

    if (!is_numeric($idade)) {
        $_SESSION["mensagem-de-erro"] = "A idade deve conter apenas números";
        return false;
    }
    return true;

}