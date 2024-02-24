<?php
   
   $xmlfile = 'XMLParser.xml';
   $xmlparser = xml_parser_create();

   $fp = fopen($xmlfile,'r');
   $xmldata = fread($fp, 4096);

   xml_parse_into_struct($xmlparser,$xmldata,$values);

   xml_parser_free($xmlparser);
   print_r($values);
   ?>