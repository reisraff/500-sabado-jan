<?php
session_start();

if (! isset($_SESSION['logado']) || $_SESSION['logado'] != true) {
	header('Location: index.php?mensagem_erro=Por favor faça o login.');
}
