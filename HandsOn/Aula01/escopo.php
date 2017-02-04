<?php
// escopo.php

// define('PI', 3.14);
// $pi = 3.14;

// function somar($valor) {
// 	global $pi;

// 	$pi = 4.50;

// 	return $pi + $valor;
// }

// var_dump($pi);

// var_dump(somar(54));


function inverter(&$a, &$b)
{
	$a = $a + $b;
	$b = $a - $b;
	$a = $a - $b;
}

$a = 10;
$b = 20;

var_dump($a, $b);
inverter($a, $b);
var_dump($a, $b);












