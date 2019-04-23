<?php
$xml= new DOMDocument;
$xml->load('Sections/Cover/to.xml');

$xsl = new DOMDocument;
$xsl->load('Sections/Cover/to.xsl');

$processing = new XSLTProcessor;
$processing ->importStyleSheet($xsl);

echo $processing->transformToXML($xml);
 ?>