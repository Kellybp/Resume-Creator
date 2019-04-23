<?php

$road = trim(filter_input(INPUT_POST, 'road', FILTER_SANITIZE_STRING));
$state = trim(filter_input(INPUT_POST, 'state', FILTER_SANITIZE_STRING));
$zip = trim(filter_input(INPUT_POST, 'zip', FILTER_SANITIZE_STRING));
$phoneNum = trim(filter_input(INPUT_POST, 'phonenNum', FILTER_SANITIZE_NUMBER_INT));
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));

echo $road;
echo $state;
echo $zip;
echo $phoneNum;
echo $email;

 
$file = '../Sections/Cover/contactMe.xml';

$xml = simplexml_load_file($file);

$address = $xml->addChild('address');
$address->addChild('road', $road);
$address->addChild('state', $state);
$address->addChild('zip', $zip);
$address->addChild('phoneNum', $phoneNum);
$address->addChild('email', $email);

$xml->asXML($file);
?>