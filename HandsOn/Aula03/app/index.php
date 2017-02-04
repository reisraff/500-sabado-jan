<?php

require 'includes/operacoes_sessao.php';
require 'includes/operacoes_banco.php';

if (isset($_GET['logout'])) {
	logout();
}

if ($_POST) {
	$usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']);

	$query = <<<SQL
SELECT
	*
FROM
	usuarios
WHERE
	usuario = "$usuario"
	AND senha = "$senha"
LIMIT 1
SQL;

	$usuario = getUnicoResultado($query);
	if (! count($usuario)) {
		setFlashMessage('erro', 'Login sem sucesso');
		header('Location: index.php');
		die();
	}
	
	login($usuario);
}

?><html>
<head>
	<title>Home</title>

	<?php if ($msg = getFlashMessage('erro')) : ?>
	<script>
		alert("<?php echo $msg; ?>");
	</script>
	<?php endif; ?>
</head>
<body>
	<form method="POST" action="?">
		<label>Usuário: </label><input type="text" name="usuario" /><br />
		<label>Senha: </label><input type="password" name="senha" /><br />
		<input type="submit" value="Login" /><br />
	</form>

	<p>
		<a href="criar_usuario.php">Registre-se Aqui</a>
	</p>
</body>
</html>