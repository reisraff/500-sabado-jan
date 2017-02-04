<?php
// switch.php

$curso = 500;

switch ($curso) {
	case 500:
		echo 'PHP Web<br />';
		break;
	case 501:
		echo 'PHP Orientado à objetos<br />';
		break;
	case 502:
		echo 'PHP Enterprise<br />';
		break;
	default:
		echo 'Curso não existe<br />';
		break;
}