<?php
//Encerra a sessão ou seja desconceta o usuario
session_start();
session_unset();
session_destroy();
header('location: login.php');

?>