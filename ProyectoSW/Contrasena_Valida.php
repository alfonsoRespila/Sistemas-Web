<?php

$contraseña=$_REQUEST['contrasena'];
require_once('nusoap-0.9.5/lib/nusoap.php');
require_once('nusoap-0.9.5/lib/class.wsdlcache.php');
$soapclient = new nusoap_client('Contrasena_Servidor.php?wsdl',true);
//Llamamos la función que habíamos implementado en el Web Service
//e imprimimos lo que nos devuelve
if(isset($_REQUEST['contrasena'])){
$result = $soapclient->call('passw',array('x'=>$contraseña,'y'=>'1010'));
echo($result);
}
?>

