<?php
$xml= new DOMDocument;
$xml->load('../xml/quotes.xml');

$xsl = new DOMDocument;
$xsl->load('../xml/Fquotes.xsl');

$processing = new XSLTProcessor;
$processing ->importStyleSheet($xsl);

echo $processing->transformToXML($xml);
 ?>