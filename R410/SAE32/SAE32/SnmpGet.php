<?php
$hostname = "192.168.1.1";
$community = "public";
$oid = ".1.3.6.1.2.1.1.5.0";
print_r(snmpget($hostname , $community ,$oid) ) ;
#la republique c moi
?>
