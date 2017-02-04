<?php
	require_once 'verifica_login.php';

	$vendedores = [
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
	<title>Listar Vendedores</title>
</head>
<body>
	<?php require_once 'menu.php'; ?>

	<table>
		<tr>
			<th>Id</th>
			<th>Nome</th>
		</tr>
		<?php foreach ($vendedores as $vendedor) : ?>
		<tr>
			<td><?php echo $vendedor['id']; ?></td>
			<td><?php echo $vendedor['nome']; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>