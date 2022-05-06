<?php

// CONFIGURACION DE GOOGLE
//$clientID = 'TU-ID-DE-CLIENTE';
//$clientSecret = 'TU-SECRETO-DE-CLIENTE';
//$redirectUri = 'URIs de redirección autorizados';

$usu= $_POST['usuario'];
$clave= $_POST['contraseña'];

if(($usu=="Juan@gmail.com") && ($clave==1234)){
    header('Location:index.html');
  }else{
   // print('Incorrecto');
  }

?>