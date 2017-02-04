<?php
// foreach.php

$linguagens = [
	'javascript',
	'php',
	'c++',
	'delph',
	'java'
];

//var_dump($linguagens);

foreach ($linguagens as $key => $linguagem) {
	// if ($key == 'melhor_linguagem') {
		echo $key . '-' . $linguagem;
		echo '<br />';
	// }
}