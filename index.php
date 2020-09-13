<?php
Header( "HTTP/1.1 301 Moved Permanently" );

$domain = $_SERVER['HTTP_HOST'];
$newDomin ="https://".$domain."/murray/pimentel";
Header( "Location: $newDomin");
//echo "https://".$domain;


?>
