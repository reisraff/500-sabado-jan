<?php
// explode.php

$frase = 'A 4 Linux é a melhor empresa de treinamento php';

$array = explode(' ', $frase);

echo '<pre>';
print_r($array);

$nova_frase = implode('_', $array);

var_dump($nova_frase);