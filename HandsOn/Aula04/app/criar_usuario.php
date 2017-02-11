<?php
// criar_usuario.php
require_once 'includes/header.php';
	
if ($_POST) {

	$requeridos = [
		'nome',
		'email',
		'usuario',
	];
	$mensagem_erro = [];

	if ($_FILES['imagem']['size'] == 0) {
		$mensagem_erro[] = 'É obrigatório enviar uma imagem';
	}
	foreach ($requeridos as $value) {
		if (empty($_POST[$value])) {
			$mensagem_erro[] = 'é obrigatório preencher o campo ' . $value;
		}
	}

	if (count($mensagem_erro)) {
		setFlashMessage('erro', implode('\n', $mensagem_erro));
		redirect('criar_usuario.php');
	}

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']);

	$ext = function ($fileName) {
		return substr($fileName, strrpos($fileName, '.') + 1);
	};

	if ($ext($_FILES['imagem']['name']) != 'jpg') {
		setFlashMessage('erro', 'A extensão da imagem deve ser JPG');
		redirect('criar_usuario.php');
	}

	$fullPathImage = __DIR__
		. '/imagens/'
		. $usuario
		. '.jpg';
	move_uploaded_file($_FILES['imagem']['tmp_name'], $fullPathImage);

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
	<form method="POST" enctype="multipart/form-data">
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
		  <input type="file"
				 class="form-control"
				 aria-describedby="basic-addon1"
				 name="imagem">
		</div>
		
		<div class="form-group">
		  <button type="submit" class="btn btn-primary">Criar Usuário</button>
		</div>
	</form>

	<p>
		<a href="index.php">Voltar</a>
	</p>

<?php require_once 'includes/footer.php'; ?>