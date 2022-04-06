<?php


$usu=$_POST['usuario'];
$clave= $_POST['contraseña'];

if(($usu== "Juan@gmail.com") && ($clave==1234) ){
header('Location:index.html');

}
else{
  
  swal("Good job!", "Usuario o Contraseña Incorrecta", "success");
  
}

/*
$dat500= 500;
$dat1000;
$dat2000;
$dat4cifra;

$dev500=100;
$dev1000;
$dev2000;
$dev4cifra;

$tot500;
$tot1000;
$tot2000;
$tot4cifra;

$deben;
$total;
$saldo;

$tot500 = ($dat500-$dev500)*400;

function ingreso(){

$usu=$_POST['usuario'];
$clave= $_POST['contraseña'];

if(($usu== "Juan@gmail.com")&& ($clave==1234) ){
header('Location:index.html');

}
else{
  
  swal("Good job!", "Usuario ou Contraseña Incorrecta", "success");
  
}

}
*/
?>