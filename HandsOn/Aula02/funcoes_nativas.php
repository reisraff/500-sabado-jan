<?php
// funcoes_nativas.php

// $var = 123;

// var_dump(is_array($var));
// var_dump(is_bool($var));
// var_dump(is_string($var));
// var_dump(is_int($var));
// var_dump(is_float($var));
// var_dump(is_double($var));

// $variavel = 'Teste';
// $variavel_null = null;

// var_dump(isset($variavel));
// var_dump(isset($nao_existe));

// var_dump(empty($variavel));
// var_dump(empty($variavel_null));


// $formato = 'No jogo o %s, fez %d gol(s)';
// vprintf($formato, ['Robinho', 3]);

$frase = 'O php é a Melhor Linguagem';
echo strtoupper($frase) . '<br />';
echo strtolower($frase) . '<br />';
echo ucwords($frase) . '<br />';