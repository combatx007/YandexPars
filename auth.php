<?php
require_once('auth_send.php');

	$login = "admin";
	$password = "admin";

	if (!isset($_SERVER['PHP_AUTH_USER'])) {
		auth_send();
	} else {
		$auth_user = $_SERVER['PHP_AUTH_USER'];
		$auth_pass = $_SERVER['PHP_AUTH_PW'];
		
		if (($auth_user != $login) || ($auth_pass != $password)) {
			auth_send();
		};
	};

    echo "<html><body bgcolor=white link=blue vlink=blue alink=red>"
    ,"<h1>Парсер Яндекса</h1>"
    ,"</body></html>";
?>