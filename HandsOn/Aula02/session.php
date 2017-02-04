<?php
// session.php
session_start();

$_SESSION['usuario_id'] = 1;
$_SESSION['usuario'] = 'rafael.reis';

var_dump($_SESSION);
