<?php
$xml_file = "firstxml.xml";
$element = new DOMElement("");

if (!$dom->load($xml_file))  // if(!$dom = domxml_open_file($xml_file)) 
{
    die("Error opening xml file");
}

$tables = $dom->getElementsByTagName("table");

foreach ($tables as $table) {
    $element = $table;
    echo "Attribute name: ", $element->get_elements("name");
}
