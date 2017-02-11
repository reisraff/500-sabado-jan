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
		<div class="form-group">
		  <input type="text"
				 class="form-control"
				 placeholder="Usuário"
				 aria-describedby="basic-addon1"
				 name="usuario">
		</div>
		<div class="form-group">
		  <input type="password"
				 class="form-control"
				 placeholder="Senha"
				 aria-describedby="basic-addon1"
				 name="senha">
		</div>
		
		<div class="form-group">
		  <button type="submit" class="btn btn-primary">Login</button>
		</div>
	</form>

	<p>
		<a href="criar_usuario.php">Registre-se Aqui</a>
	</p>

<?php require_once 'includes/footer.php'; ?>