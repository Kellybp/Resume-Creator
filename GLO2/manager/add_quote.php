<?php
//get student data
$author = trim(filter_input(INPUT_POST, 'author', FILTER_SANITIZE_STRING));
$saying = trim(filter_input(INPUT_POST, 'saying', FILTER_SANITIZE_STRING));

//validation

if(empty($author) || empty($saying)) {

		$error_message = "Something was left empty.  Please check all fields and try again.";

		include('../models/database_error.php');
} else {

	require_once('../models/database.php');

	$stmt = $db->prepare("INSERT INTO squotes (author, saying)
			VALUES (:author, :saying)");

	$stmt->bindParam(':author', $author);
	$stmt->bindParam(':saying', $saying);

	$stmt->execute();

	header('Location: ../index.php');
}
?>