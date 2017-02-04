<?php
// criar_usuario.php
require_once 'includes/header.php';
	
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
		redirect('index.php');
	}

	$query = <<<SQL
INSERT INTO usuarios
	(nome, email, senha, usuario)
VALUES
	('$nome', '$email', '$senha', '$usuario')
SQL;

	executaQuery($query);
	redirect('index.php');
}

?>
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

<?php require_once 'includes/footer.php'; ?>