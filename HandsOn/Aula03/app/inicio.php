<?php

require 'includes/operacoes_sessao.php';
verifcarLogin();

?>

Olá <?php echo $_SESSION['usuario']['nome']; ?>

<br />

<a href="index.php?logout=true">Logout</a>
