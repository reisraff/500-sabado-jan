<?php
// criar_usuario.php
require_once 'includes/operacoes_banco.php';
require_once 'includes/operacoes_sessao.php';
	
if ($_POST) {
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

	$result = getUnicoResultado($query);
	if (count($result)) {
		setFlashMessage('erro', 'Já existe um usuário cadastrado com esse email.');
		header('Location: index.php');
		die();
	}

	$query = <<<SQL
INSERT INTO usuarios
	(nome, email, senha)
VALUES
	('$nome', '$email', '$senha')
SQL;

	executaQuery($query);
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
		<label>Senha: </label><input type="password" name="senha" /><br />
		<input type="submit" value="Cadastrar" /><br />
	</form>
</body>
</html>