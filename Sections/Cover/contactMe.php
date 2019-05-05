<?php
$xml= new DOMDocument;
$xml->load('Sections/Cover/contactMe.xml');

$xsl = new DOMDocument;
$xsl->load('Sections/Cover/contactMe.xsl');

$processing = new XSLTProcessor;
$processing->importStyleSheet($xsl);

echo $processing->transformToXML($xml);
 ?>