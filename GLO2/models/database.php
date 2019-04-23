<?php
	$dsn = 'mysql:host=localhost;dbname=web2glo2';
	$username = 'root';
	$password = '';

	try {
		$db = new PDO($dsn, $username, $password);
	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		include('views/database_error.php');
		exit();
	}
?>