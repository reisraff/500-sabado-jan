<?php
// session_get.php

session_start();

var_dump($_SESSION);

// session_destroy();
unset($_SESSION['usuario_id']);

var_dump($_SESSION);