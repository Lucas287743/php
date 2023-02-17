<?php
require "conn/conn.php";
$nombres="Marcos Tadeo";
$apellidos="Rosales";
$usuario="martadgamer@gmail.com";
$clave="12345";
$nivel="Admin";

$sql="INSERT INTO usuarios (nombres,apellidos,usuario,clave,nivel) VALUE('".$nombres."','".$apellidos."','".$usuario."','".$clave."','".$nivel."');";

$r=mysqli_query($conn,$sql);

if($r){
    print "Se inserto correctamente";
}else{
    print "Error al insertar";
}
?>