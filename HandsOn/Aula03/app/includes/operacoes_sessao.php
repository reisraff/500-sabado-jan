<?php
// operacoes_sessao.php
session_start();

function verifcarLogin() {
	if (! isset($_SESSION['usuario'])) {
		setFlashMessage('erro', 'Você não tem permissão.');
		header('Location: index.php');
		die();
	}
}

function logout() {
	session_destroy();
	header('Location: index.php');
	die();
}

function login(array $usuario, $pagina = 'inicio.php') {
	$_SESSION['usuario'] = $usuario;
	header('Location: ' . $pagina);
	die();
}

function setFlashMessage($id, $message) {
	if (! isset($_SESSION['messages'])) {
		$_SESSION['messages'] = [];
	}
	$_SESSION['messages'][$id] = $message;
}

function getFlashMessage($id) {
	$msg = null;

	if (isset($_SESSION['messages'][$id])) {
		$msg = $_SESSION['messages'][$id];
		unset($_SESSION['messages'][$id]);
	}

	return $msg;
}