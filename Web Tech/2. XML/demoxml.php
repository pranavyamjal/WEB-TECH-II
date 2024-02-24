<?php
if(isset($_POST['hidden'])) {
    echo "links data posted";

    $start = $_POST['start'];
    $ename = $_POST['ename'];
    $evalue = $_POST['evalue'];
    $xmlBeg = "<?xml version='1.0' encoding='ISO-8859-1' ?>";

    $rootElementStart = "<$start>";
    $rootElementEnd = "</$start>";

    $xml_document = $xmlBeg;
    $xml_document .= $rootElementStart;
    $xml_document .= "<fname>";
    $xml_document .= $ename;
    $xml_document .= "</fname>";
    $xml_document .= "<sname>";
    $xml_document .= $evalue;
    $xml_document .= "</sname>";
    $xml_document .= $rootElementEnd;

    $path_dir = $start . ".xml";

    $fp = fopen($path_dir, 'w');
    $write = fwrite($fp, $xml_document);
    fclose($fp);

    echo "<br> THE LOADED FILE IS <br>" . $path_dir . "<br>";
}
?>
