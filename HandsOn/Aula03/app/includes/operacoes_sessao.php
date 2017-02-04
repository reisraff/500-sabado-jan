<?php
// operacoes_sessao.php
session_start();

function verifcarLogin() {
	if (! isset($_SESSION['usuario'])) {
		header('Location: index.php?mensagem_erro=Você não tem permissão.');
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

/**
 * $_SESSION['messages']['id']
 */
function setFlashMessage($id, $message) {

}

/**
 * $_SESSION['messages']['id'] apagar antes de retornar
 */
function getFlashMessage($id) {

}