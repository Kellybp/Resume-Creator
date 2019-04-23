<?php

$quote_id = trim(filter_input(INPUT_POST, 'quote_id', FILTER_VALIDATE_INT));

//validation

require_once('../models/database.php');

$stmt = $db->prepare("DELETE FROM squotes
		WHERE quoteID = :quoteID");

$stmt->bindParam(':quoteID', $quote_id);

$stmt->execute();

header('Location: ../index.php');

?>