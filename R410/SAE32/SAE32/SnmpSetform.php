<?php
$hostname = "192.168.1.1";
$community = "private";
$newValue = $_POST['valeur'];
$oid = $_POST['oid'];
$type= $_POST['type'];
snmpset($hostname , $community ,$oid ,$type , $newValue) ;
?>