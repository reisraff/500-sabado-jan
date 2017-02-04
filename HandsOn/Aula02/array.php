<?php
// array.php

$array = [
	'usuario' => 'Rafael',
	'idade' => 23,
	'cidade' => 'São Paulo',
	'pais' => 'Brasil',
	'sexo' => 'Masculino',
];

var_dump($array);
ksort($array);
var_dump($array);
