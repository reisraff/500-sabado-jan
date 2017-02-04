<?php
// if_else.php

$idade = 21;

if ($idade >= 18) {
	echo 'Só mostra se idade for
	maior ou igual à 18';
	echo '<br />';
}

echo <<<EOF
tudo que estiver daqui pra baixo é executado
EOF;

echo '<hr />';

if ($idade > 18) {
	echo 'Você é de maior';
} else {
	echo 'Você é de menor';
}

echo '<hr />';

if ($idade < 18) {
	echo 'Você é de menor';
} elseif ($idade == 18) {
	echo 'Você tem 18 anos';
} else {
	echo 'Você tem mais que 18 anos';
}