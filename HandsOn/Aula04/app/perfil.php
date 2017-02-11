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
			  <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" style="height: 180px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15a2e0d114d%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15a2e0d114d%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22118%22%20y%3D%2297.2%22%3E318x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
			  <div class="card-block">
			    <h4 class="card-title"><?php echo $usuario['nome']; ?></h4>

				<strong>Email</strong>: <?php echo $usuario['email']; ?> <br />
				<strong>Usuário</strong>: <?php echo $usuario['usuario']; ?> <br />

				<?php
				    // Somente mostro o botao caso n seja eu mesmo
					if ($_SESSION['usuario']['usuario'] != $usuario['usuario']) :
				?>
					<?php if (count(getResultados($query))) : ?>
						<a class="btn btn-primary" href="operacao_seguir.php?operacao=deixar_seguir&usuario_id=<?php echo $usuario['id']; ?>">Deixar de Seguir</a>
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