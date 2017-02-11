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

<div class="row">
	<div class="col-md-12 col-md-offset-5">
		<div style="text-align: center;">
			<div class="card" style="width: 20rem;">
			  <img class="card-img-top"
			  	style="height: 180px; width: 100%; display: block;"
			  	src="http://localhost/4500-PHP/HandsOn/Aula04/app/imagens/<?php echo $usuario['usuario'];?>.jpg">
			  <div class="card-block">
			    <h4 class="card-title"><?php echo $usuario['nome']; ?></h4>

				<strong>Email</strong>: <?php echo $usuario['email']; ?> <br />
				<strong>Usuário</strong>: <?php echo $usuario['usuario']; ?> <br />

				<?php
				    // Somente mostro o botao caso n seja eu mesmo
					if ($_SESSION['usuario']['usuario'] != $usuario['usuario']) :
				?>
					<?php if (count(getResultados($query))) : ?>
						<a class="btn btn-danger" href="operacao_seguir.php?operacao=deixar_seguir&usuario_id=<?php echo $usuario['id']; ?>">Deixar de Seguir</a>
					<?php else : ?>
						<a class="btn btn-primary" href="operacao_seguir.php?operacao=seguir&usuario_id=<?php echo $usuario['id']; ?>">Seguir</a>
					<?php endif ?>
				<?php endif ?>
			  </div>
			</div>
		</div>
	</div>
</div>
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
	<div class="panel panel-default">
		<div class="panel-body">
		    <strong><?php echo $mensagem['nome']; ?></strong>: 
		    <?php echo
			    preg_replace(
				    '/\@([a-zA-Z0-9_\-\.]+)/',
				    '<a href="perfil.php?usuario=$1">@$1</a>',
				    $mensagem['mensagem']
			    );
		    ?>
		</div>
	</div>
<?php endforeach; ?>
</p>

<?php require_once 'includes/footer.php'; ?>