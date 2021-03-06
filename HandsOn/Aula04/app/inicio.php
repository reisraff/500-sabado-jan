<?php
require_once 'includes/header.php';

verifcarLogin();

if ($_POST) {
	$mensagem = addslashes($_POST['mensagem']);
	$id_usuario = $_SESSION['usuario']['id'];

	$query = <<<SQL
INSERT INTO mensagens (usuario_id, mensagem)
VALUES($id_usuario, '$mensagem')
SQL;

	executaQuery($query);
	redirect('inicio.php');
}
?>


	<p>Olá <?php echo $_SESSION['usuario']['nome']; ?></p>

	<p>
		<form method="POST">


			<div class="form-group">
			  <textarea class="form-control"
			  			name="mensagem"
			  			rows="3"></textarea>
			</div>

			<div class="form-group">
			  <button type="submit" class="btn btn-primary">Criar Mensagem</button>
			</div>
		</form>
	</p>

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
	m.usuario_id = {$_SESSION['usuario']['id']}
	OR m.usuario_id IN (
		SELECT
			seu_id
		FROM
			seguindo
		WHERE
			meu_id = {$_SESSION['usuario']['id']}
	)
ORDER BY
	m.id DESC
SQL;
			$mensagens = getResultados($query);
		?>

		<?php
			$counter = 0;
			$banner = 1;
			foreach ($mensagens as $mensagem) : 
			$counter++;
		?>

			<?php if ($counter % 3 == 0) : ?>
				<?php if (isset($_COOKIE['banner' . $banner])) : ?>
					<p style="height: 50px; border: 1px dashed;">
						<?php
							echo $_COOKIE['banner' . $banner];
							$banner++;
						?>
					</p>
				<?php endif ?>
			<?php endif ?> 

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
