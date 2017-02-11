<?php
// operacoes_banco.php

mysql_connect('localhost', 'root', '123456');
mysql_select_db('teste');

function getUnicoResultado($query) {
	$resultado = mysql_query($query);
	if (! mysql_num_rows($resultado)) {
		return [];
	}

	while ($linha = mysql_fetch_assoc($resultado)) {
		return $linha;
		break;
	}
}

function getResultados($query) {
	$resultado = mysql_query($query);
	if (! mysql_num_rows($resultado)) {
		return [];
	}

	$return = [];
	while ($linha = mysql_fetch_assoc($resultado)) {
		$return[] = $linha;
	}

	return $return;
}

function executaQuery($query) {
	mysql_query($query);
}