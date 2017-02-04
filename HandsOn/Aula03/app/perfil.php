<?php
require_once 'includes/header.php';

$usuario = $_GET['usuario'];

$query = <<<SQL
SELECT * FROM usuarios WHERE usuario = '$usuario'
SQL;

$usuario = getUnicoResultado($query);

if (! count($usuario)) {
	setFlashMessage('erro', 'Usuário não encontrado.');
	redirect('inicio.php');
}

?>

Nome: <?php echo $usuario['nome']; ?> <br />
Email: <?php echo $usuario['email']; ?> <br />
Usuário: <?php echo $usuario['usuario']; ?> <br />

<?php require_once 'includes/footer.php'; ?>