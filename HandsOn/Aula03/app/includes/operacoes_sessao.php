<?php
// operacoes_sessao.php
require_once 'operacoes_gerais.php';
session_start();

function verifcarLogin() {
	if (! isset($_SESSION['usuario'])) {
		setFlashMessage('erro', 'Você não tem permissão.');
		redirect('index.php');
	}
}

function logout() {
	session_destroy();
	redirect('index.php');
}

function login(array $usuario, $pagina = 'inicio.php') {
	$_SESSION['usuario'] = $usuario;
	redirect($pagina);
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