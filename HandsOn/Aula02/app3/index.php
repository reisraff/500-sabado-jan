<?php
	
if ($_POST) {
	require_once 'conexao.php';

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);

	$query = <<<SQL
SELECT
	*
FROM
	usuarios
WHERE
	email = '$email'
SQL;

	$result = pg_query($query);
	if (pg_num_rows($result) > 0) {
		header('Location: index.php?error=Já existe um usuário cadastrado com esse email.');
		die();
	}

	$query = <<<SQL
INSERT INTO usuarios
	(nome, email, senha)
VALUES
	('$nome', '$email', '$senha')
SQL;

	pg_query($query);
}

?>
<html>
<head>
	<title>Cadastrar Usuários</title>

	<?php if (isset($_GET['error'])) : ?>
	<script>
		alert("<?php echo $_GET['error']; ?>");
	</script>
	<?php endif; ?>
</head>
<body>
	<form method="POST" action="?">
		<label>Nome: </label><input type="text" name="nome" /><br />
		<label>Email: </label><input type="text" name="email" /><br />
		<label>Senha: </label><input type="password" name="senha" /><br />
		<input type="submit" value="Cadastrar" /><br />
	</form>
</body>
</html>