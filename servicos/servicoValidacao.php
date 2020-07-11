<?php

function validaNome (string $nome) : bool {

    if (empty($nome)) {
        setarMensagemErro ("O nome não pode ser vazio");
        return false;
    }
    
    else if (strlen($nome) < 3) {
        setarMensagemErro ("O nome não pode ser inferior a 3 caracteres");
        return false;
    }
    
    else if (strlen($nome) > 40) {
        setarMensagemErro ("O nome não pode ser superior a 40 caracteres");
        return false;
    }
    return true;
}

function validaIdade (string $idade) : bool {

    if (!is_numeric($idade)) {
        setarMensagemErro ("A idade deve conter apenas números");
        return false;
    }
    return true;

}