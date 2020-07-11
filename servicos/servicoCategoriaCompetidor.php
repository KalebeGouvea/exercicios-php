<?php

function definirCategoriaCompetidor (string $nome, string $idade) : ?string {
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';

    if (validaNome($nome) && validaIdade($idade)) {
        if ($idade >= 6 && $idade <= 12) {
            for ($i = 0; $i < count($categorias); $i++){
                if ($categorias[$i] == 'infantil'){
                    setarMensagemSucesso(mensagem: "O nadador " .$nome. " compete na categoria " .$categorias[$i]);
                    return null;
                }
            }
        }
        
        elseif ($idade >= 13 && $idade <= 18) 
        {
            for ($i = 0; $i < count($categorias); $i++)
            {
                if ($categorias[$i] == 'adolescente')
                {
                    setarMensagemSucesso(mensagem: "O nadador " .$nome. " compete na categoria " .$categorias[$i]);
                    return null;
                }
            }
        }
        
        else 
        {
            for ($i = 0; $i < count($categorias); $i++)
            {
                if ($categorias[$i] == 'adulto')
                {
                    setarMensagemSucesso(mensagem: "O nadador " .$nome. " compete na categoria " .$categorias[$i]);
                    return null;
                }
            }
        }
    }
    else {
        return obterMensagemErro();
    }
}