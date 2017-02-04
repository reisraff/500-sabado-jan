<?php
// criar_usuario.php
require_once 'includes/operacoes_banco.php';
require_once 'includes/operacoes_sessao.php';
	
if ($_POST) {
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']);

	$query = <<<SQL
SELECT
	*
FROM
	usuarios
WHERE
	email = '$email'
	OR usuario = '$usuario'
SQL;

	$result = getUnicoResultado($query);
	if (count($result)) {
		setFlashMessage('erro', 'Já existe um usuário cadastrado com esse email/usuario.');
		header('Location: index.php');
		die();
	}

	$query = <<<SQL
INSERT INTO usuarios
	(nome, email, senha, usuario)
VALUES
	('$nome', '$email', '$senha', '$usuario')
SQL;

	executaQuery($query);
	header('Location: index.php');
}

?>
<html>
<head>
	<title>Cadastrar Usuários</title>

	<?php if ($msg = getFlashMessage('erro')) : ?>
	<script>
		alert("<?php echo $msg; ?>");
	</script>
	<?php endif; ?>
</head>
<body>
	<form method="POST">
		<label>Nome: </label><input type="text" name="nome" /><br />
		<label>Email: </label><input type="text" name="email" /><br />
		<label>Usuário: </label><input type="text" name="usuario" /><br />
		<label>Senha: </label><input type="password" name="senha" /><br />
		<input type="submit" value="Cadastrar" /><br />
	</form>

	<p>
		<a href="index.php">Voltar</a>
	</p>
</body>
</html>