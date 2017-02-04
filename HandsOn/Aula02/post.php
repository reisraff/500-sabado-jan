<?php
// post.php

if ($_POST) {
	var_dump($_POST['usuario']);
	die();
}

?>
<html>
<head>
	<title>Post</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="usuario" /><br />
		<input type="password" name="senha" /><br />
		<input type="submit" value="Logar" /><br />
	</form>
</body>
</html>