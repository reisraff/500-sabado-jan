<?php
	require_once 'verifica_login.php';

	$usuarios = [
		[
			'id' => 1,
			'nome' => 'José'
		],
		[
			'id' => 2,
			'nome' => 'Edigardo'
		],
	];

?>
<html>
<head>
	<title>Listar Usuários</title>
</head>
<body>
	<?php require_once 'menu.php'; ?>

	<table>
		<tr>
			<th>Id</th>
			<th>Nome</th>
		</tr>
		<?php foreach ($usuarios as $usuario) : ?>
		<tr>
			<td><?php echo $usuario['id']; ?></td>
			<td><?php echo $usuario['nome']; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>