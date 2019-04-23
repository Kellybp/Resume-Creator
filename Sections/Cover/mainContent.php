<?php
$xml= new DOMDocument;
$xml->load('Sections/Cover/mainContent.xml');

$xsl = new DOMDocument;
$xsl->load('Sections/Cover/mainContent.xsl');

$processing = new XSLTProcessor;
$processing ->importStyleSheet($xsl);

echo $processing->transformToXML($xml);
 ?>