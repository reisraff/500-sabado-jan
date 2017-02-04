<?php
session_start();

if ($_POST) {
	if ($_POST['usuario'] == 'jose' && $_POST['senha'] == 123456) {
		$_SESSION['logado'] = true;
	}

	header('Location: logado.php');
}

if (isset($_GET['deslogar']) && $_GET['deslogar'] == true) {
	unset($_SESSION['logado']);
}

?>
<html>
<head>
	<title>Login</title>

	<?php if (isset($_GET['mensagem_erro'])) : ?>
	<script>
		alert("<?php echo $_GET['mensagem_erro']; ?>");
	</script>
	<?php endif; ?>

</head>
<body>
	<form method="POST">
		<input type="text" name="usuario" /><br />
		<input type="password" name="senha" /><br />
		<input type="submit" value="Login" /><br />
	</form>
</body>
</html>