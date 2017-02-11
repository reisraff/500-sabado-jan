<?php

require_once 'includes/header.php';

// Verifica o tipo de operação
switch ($_GET['operacao']) {
	// caso seguir, monta a query de seguir
	case 'seguir' :
		$query = <<<SQL
INSERT INTO
	seguindo (meu_id, seu_id)
	VALUES ({$_SESSION['usuario']['id']}, {$_GET['usuario_id']})
SQL;
		break;
	// caso deixar de seguir, monta a query de deixar de seguir
	case 'deixar_seguir' :
		$query = <<<SQL
DELETE FROM
	seguindo
WHERE
	meu_id = {$_SESSION['usuario']['id']}
	AND seu_id = {$_GET['usuario_id']}
SQL;
		break;
	// caso nenhuma outra redireciona pro inicio.php
	default :
		redirect('inicio.php');
		break;
}

// executa a query de operação escolhida
executaQuery($query);

$query = <<<SQL
SELECT * FROM usuarios WHERE id = {$_GET['usuario_id']}
SQL;
/* busca o usuário no banco para redirecionar
 para o perfil dele
*/
$usuario = getUnicoResultado($query);

// redireciona para o perfil dele
redirect('perfil.php?usuario=' . $usuario['usuario']);
