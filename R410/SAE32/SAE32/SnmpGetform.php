<?php
$hostname = "192.168.1.1";
$community = "public";
$oid = $_POST['oid'];
print_r(snmpget($hostname , $community ,$oid) ) ;
?>