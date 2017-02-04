<?php

function redirect($pagina) {
	header('Location: ' . $pagina);
	die();
}