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
		<div class="form-group">
		  <input type="text"
				 class="form-control"
				 placeholder="Nome"
				 aria-describedby="basic-addon1"
				 name="nome">
		</div>
		<div class="form-group">
		  <input type="text"
				 class="form-control"
				 placeholder="Email"
				 aria-describedby="basic-addon1"
				 name="email">
		</div>
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
		  <button type="submit" class="btn btn-primary">Criar Usuário</button>
		</div>
	</form>

	<p>
		<a href="index.php">Voltar</a>
	</p>

<?php require_once 'includes/footer.php'; ?>