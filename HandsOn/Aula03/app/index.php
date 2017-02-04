<?php

require 'includes/operacoes_sessao.php';
require 'includes/operacoes_banco.php';

if (isset($_GET['logout'])) {
	logout();
}

if ($_POST) {
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);

	$query = <<<SQL
SELECT
	*
FROM
	usuarios
WHERE
	email = "$email"
	AND senha = "$senha"
LIMIT 1
SQL;

	$usuario = getUnicoResultado($query);
	if (! count($usuario)) {
		header('Location: index.php?mensagem_erro=Login sem sucesso');
		die();
	}
	
	login($usuario);
}

?><html>
<head>
	<title>Home</title>

	<?php if (isset($_GET['mensagem_erro'])) : ?>
	<script>
		alert("<?php echo $_GET['mensagem_erro']; ?>");
	</script>
	<?php endif; ?>
</head>
<body>
	<form method="POST" action="?">
		<label>Email: </label><input type="text" name="email" /><br />
		<label>Senha: </label><input type="password" name="senha" /><br />
		<input type="submit" value="Login" /><br />
	</form>

	<p>
		<a href="criar_usuario.php">Registre-se Aqui</a>
	</p>
</body>
</html>