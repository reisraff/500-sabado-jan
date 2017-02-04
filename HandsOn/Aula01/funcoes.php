<?php
// funcoes.php

function soma ($a, $b = 10) {
	return $a + $b;
}

$resultado = soma(1,2);

var_dump($resultado);
var_dump(soma(17));
var_dump(soma('bicho papão'));
var_dump(soma('32 bicho papão'));