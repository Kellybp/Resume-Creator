<?php
$movie_id = trim(filter_input(INPUT_POST, 'movie_id', FILTER_VALIDATE_INT));
$Title = trim(filter_input(INPUT_POST, 'Title', FILTER_SANITIZE_STRING));
$RelDate = trim(filter_input(INPUT_POST, 'RelDate', FILTER_SANITIZE_STRING));
$Genre = trim(filter_input(INPUT_POST, 'Genre', FILTER_SANITIZE_STRING));
$IMGS = trim(filter_input(INPUT_POST, 'IMGString', FILTER_SANITIZE_STRING));

//validation

if(empty($Title) || empty($RelDate) || empty($Genre) || empty($IMGS)) {

		$error = "Invalid Movie Data entered.  Please check all fields and try again.";

		include('../error.php');
} else {

	require_once('../models/database.php');

	$stmt = $db->prepare("UPDATE movies 
				SET Title = :title, RelDate = :reldate, Genre = :genre, IMGString = :imgs
				WHERE MovieID = :movieID");

	$stmt->bindParam(':movieID', $movie_id);
	$stmt->bindParam(':title', $Title);
	$stmt->bindParam(':reldate', $RelDate);
	$stmt->bindParam(':genre', $Genre);
	$stmt->bindParam(':imgs', $IMGS);

	$stmt->execute();

	header('Location: ../index.php');
}
?>