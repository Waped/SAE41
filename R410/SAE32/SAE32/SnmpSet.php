<?php
$hostname = "192.168.1.1";
$community = "private";
$newValue = "LeGrandEtMagnifiqueRobin";
$oid = ".1.3.6.1.2.1.1.5.0";
snmpset($hostname , $community ,$oid ,'s' , $newValue) ;
?>