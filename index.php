<?php
Header( "HTTP/1.1 301 Moved Permanently" );

$domain = $_SERVER['HTTP_HOST'];
$newDomin ="https://".$domain."/murrays/pimentels";
Header( "Location: $newDomin");
//echo "https://".$domain;


?>
