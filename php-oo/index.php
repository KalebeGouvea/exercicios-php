<?php

class venda 
{
    private $data;
    private $produto;
    private $quantidade;
    private $valorTotal;

    public function __constructor ($data, $produto, $quantidade, $valorTotal) 
    {
        $this->data = $data;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;
    }

    public function exibirDadosVenda ($data, $produto, $quantidade, $valorTotal) 
    {
        return 'Foram adquiridos ' .$this->quantidade. ' quantidades do produto ' .$this->produto. ' em ' .$this->data. '. O valor total foi de R$ ' .$this->valorTotal.; 
    }
}

$objvenda = new venda (
    $data = '13 de julho de 2020', 
    $produto = 'Monitor', 
    $quantidade = 8, 
    $valorTotal = 7898.90
);


echo $objvenda->exibirDadosVenda();