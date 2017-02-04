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
	header('Location: inicio.php');
	die();
}
?>


	<p>Olá <?php echo $_SESSION['usuario']['nome']; ?></p>

	<p>
		<form method="POST">
			<label>Mensagem</label>
			<br />
			<textarea name="mensagem" cols="60"></textarea>
			<p>
				<input type="submit" value="Criar Mensagem" />
			</p>
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
ORDER BY
	m.id DESC
SQL;
			$mensagens = getResultados($query);
		?>

		<?php foreach ($mensagens as $mensagem) : ?>
			<div style="border: 1px solid; margin: 5px 0px;">
				<strong><?php echo $mensagem['nome']; ?></strong>: 
				<?php echo $mensagem['mensagem']; ?>
			</div>
		<?php endforeach; ?>
	</p>

<?php require_once 'includes/footer.php'; ?>
