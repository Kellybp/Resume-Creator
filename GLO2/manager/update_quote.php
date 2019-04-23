<?php
$quote_id = trim(filter_input(INPUT_POST, 'quote_id', FILTER_VALIDATE_INT));
$author = trim(filter_input(INPUT_POST, 'author', FILTER_SANITIZE_STRING));
$saying = trim(filter_input(INPUT_POST, 'saying', FILTER_SANITIZE_STRING));


//validation

if(empty($author) || empty($saying)) {

		$error_message = "Invalid quote Data entered.  Please check all fields and try again.";

		include('../error.php');
} else {

	require_once('../models/database.php');

	$stmt = $db->prepare("UPDATE squotes 
				SET author = :author, saying = :saying
				WHERE quoteID = :quoteID");

	$stmt->bindParam(':quoteID', $quote_id);
	$stmt->bindParam(':author', $author);
	$stmt->bindParam(':saying', $saying);

	$stmt->execute();

	header('Location: ../index.php');
}
?>