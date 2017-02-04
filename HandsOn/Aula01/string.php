<?php
// string.php

$mensagem = 'Olá tudo bem?';

$html = '
<html>
<head>
	<title>String</title>
</head>
<body>
	<h2>' . $mensagem . '</h2><br />\nHello
</body>
</html>
';

echo $html;