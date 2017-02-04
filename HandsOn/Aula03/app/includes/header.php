<?php
require_once 'includes/operacoes_gerais.php';
require_once 'includes/operacoes_banco.php';
require_once 'includes/operacoes_sessao.php';
?>
<html>
<head>
	<title>Meu Sistema</title>

	<?php if ($msg = getFlashMessage('erro')) : ?>
	<script>
		alert("<?php echo $msg; ?>");
	</script>
	<?php endif; ?>
</head>
<body>
	<p>
		<a href="inicio.php">Inicio</a> | 
		<a href="perfil.php?usuario=<?php echo $_SESSION['usuario']['usuario']; ?>">Perfil</a> | 
		<a href="index.php?logout=true">Logout</a>
	</p>

	<p>