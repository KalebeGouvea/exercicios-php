<?php

$data = new DateTime ();
var_dump($data);

$intervalo = new DateInterval('P5DT10H50M');
$data->sub($intervalo);

var_dump($data);