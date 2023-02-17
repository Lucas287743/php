<?php
$host="localhost";
$usuario="root";
//xamp no tiene clave. mamp tiene de clave root
$clave="";
$db="escuela";
$conn=mysqli_connect($host,$usuario,$clave,$db) or die("Error en la conexion");
mysqli_select_db($conn,$db) or die("Error al conectarte en la base de datos");
?>