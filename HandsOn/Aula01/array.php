<?php
// array.php

$array1 = array(1,2,3,4,5,6,7,8,9,0);
$array2 = [$array1];
$array2[10] = [
	'sobremesa' => 'bolo',
	3 => 'cholocate',
	'pizza'
];
$array2[] = 'Super man'; // 1

// var_dump($array1);
// print_r($array2);

var_dump($array2[0][6]);
var_dump($array2[10][2]);