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

		<div class="input-group">
		  <input type="text"
				 class="form-control"
				 placeholder="Usuário"
				 aria-describedby="basic-addon1"
				 name="usuario">
		</div>

		<div class="input-group">
		  <input type="text"
				 class="form-control"
				 placeholder="Senha"
				 aria-describedby="basic-addon1"
				 name="password">
		</div>

		<div class="input-group">
		  <input type="submit"
				 class="form-control"
				 aria-describedby="basic-addon1"
				 value="Login">
		</div>
	</form>

	<p>
		<a href="criar_usuario.php">Registre-se Aqui</a>
	</p>

<?php require_once 'includes/footer.php'; ?>