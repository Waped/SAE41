$SNMP= NEW-OBJECT -comObject olePrn.OleSNMP
$ip='192.168.1.1'
$community= "private"
$SNMP.open($ip,$community,2,1000)
$oid=".1.3.6.1.2.1.1.5.0"
$value="Robin est tellement incroyable"
$SNMP.getTree($oid)
$SNMP.set($oid,$value)
$result = $SNMP.get($oid)
$SNMP.close()
$result