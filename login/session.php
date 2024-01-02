<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: /~eaksay/login/login.php');
	exit;
}
?>