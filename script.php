<?php

include "servicos/servicoValidacao.php";
include "servicos/servicoMensagemSessao.php";
include "servicos/servicoCategoriaCompetidor.php";

$nome = $_POST["nome"];
$idade = $_POST["idade"];

definirCategoriaCompetidor ($nome, $idade);
header("location: index.php")