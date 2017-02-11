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

$query = <<<SQL
SELECT
	*
FROM
	seguindo
WHERE
	meu_id = {$_SESSION['usuario']['id']}
	AND seu_id = {$usuario['id']}
SQL;

// verifica se o usuario logado segue o usuario desse perfil
// $seguindo = !! count(getResultados($query));
?>

Nome: <?php echo $usuario['nome']; ?> <br />
Email: <?php echo $usuario['email']; ?> <br />
Usuário: <?php echo $usuario['usuario']; ?> <br />

<?php
    // Somente mostro o botao caso n seja eu mesmo
	if ($_SESSION['usuario']['usuario'] != $usuario['usuario']) :
?>
	<?php if (count(getResultados($query))) : ?>
		<a href="operacao_seguir.php?operacao=deixar_seguir&usuario_id=<?php echo $usuario['id']; ?>">Deixar de Seguir</a>
	<?php else : ?>
		<a href="operacao_seguir.php?operacao=seguir&usuario_id=<?php echo $usuario['id']; ?>">Seguir</a>
	<?php endif ?>
<?php endif ?>

<hr />

<p>
<?php
$query = <<<SQL
SELECT
	*
FROM
	mensagens AS m
	INNER JOIN
		usuarios AS u
		ON u.id = m.usuario_id
WHERE
	u.usuario = "{$_GET['usuario']}"
ORDER BY
	m.id DESC
SQL;
	$mensagens = getResultados($query);
?>

<?php foreach ($mensagens as $mensagem) : ?>
	<div style="border: 1px solid; margin: 5px 0px;">
		<strong><?php echo $mensagem['nome']; ?></strong>: 
		<?php echo
			preg_replace(
				'/\@([a-zA-Z0-9_\-\.]+)/',
				'<a href="perfil.php?usuario=$1">@$1</a>',
				$mensagem['mensagem']
			);
		?>
	</div>
<?php endforeach; ?>
</p>

<?php require_once 'includes/footer.php'; ?>