<?php
// Concatenacao.php

$nome = 'Rafael Reis';

echo 'Olá ' . $nome . ', tudo bem?<br />';
echo 'Olá ' , $nome , ', tudo bem?<br />';

printf('Olá %s, tudo bem?<br />', $nome);

$mensagem = sprintf('%s %s, tudo bem?', 'Olá', $nome);

var_dump($mensagem);
