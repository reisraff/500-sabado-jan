<?php

// request.php

var_dump($_REQUEST);
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