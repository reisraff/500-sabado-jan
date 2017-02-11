<?php
// teste1.php
echo 'Ultimos Cookies:';
var_dump($_COOKIE);

if ($_POST) {
	$busca = isset($_COOKIE['busca']) ?
		$_COOKIE['busca'] :
		'';
	setcookie('busca', $busca . ',' . $_POST['busca']);
}

?>
<form method="POST">
	<input type="text" name="busca" />
	<input type="submit" value="Buscar" />
</form>