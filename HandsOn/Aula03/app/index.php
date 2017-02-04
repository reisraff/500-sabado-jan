<?php
require_once 'includes/header.php';

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
		redirect('index.php');
	}
	
	login($usuario);
}

?>
	<form method="POST" action="?">
		<label>Usuário: </label><input type="text" name="usuario" /><br />
		<label>Senha: </label><input type="password" name="senha" /><br />
		<input type="submit" value="Login" /><br />
	</form>

	<p>
		<a href="criar_usuario.php">Registre-se Aqui</a>
	</p>

<?php require_once 'includes/footer.php'; ?>