<?php
	require_once 'verifica_login.php';

	$clientes = [
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
	<title>Listar Clientes</title>
</head>
<body>
	<?php require_once 'menu.php'; ?>

	<table>
		<tr>
			<th>Id</th>
			<th>Nome</th>
		</tr>
		<?php foreach ($clientes as $cliente) : ?>
		<tr>
			<td><?php echo $cliente['id']; ?></td>
			<td><?php echo $cliente['nome']; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>