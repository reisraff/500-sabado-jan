<?php
// operadores.php

// Aritiméticos
var_dump(1 + 2);
var_dump(1 - 2);
var_dump(1 / 2);
var_dump(1 * 2);
var_dump(1 % 2);

echo '<hr />';

// Atribuição
$a = 1;
var_dump($a += 1);
var_dump($a -= 1);
var_dump($a *= 1);
var_dump($a /= 1);
var_dump($a++);
var_dump(++$a);
var_dump($a--);
var_dump(--$a);

echo '<hr />';

// Relacionais
var_dump(1 == 1);
var_dump(1 === 1);
var_dump(1 < 1);
var_dump(1 > 1);
var_dump(1 <= 1);
var_dump(1 >= 1);
var_dump(1 != 1);
var_dump(1 <> 1);

echo '<hr />';

// Lógicos
var_dump(true and true);
var_dump(true && true);
var_dump(true or true);
var_dump(true || true);
var_dump(true xor true);
var_dump(!true);
