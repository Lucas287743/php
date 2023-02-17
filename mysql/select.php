<?php
require "conn/conn.php";

$sql="SELECT * FROM usuarios;";
//$sql="SELECT * FROM usuarios WHERE idUsuario=2;";

$r=mysqli_query($conn,$sql);

//numeros de filas obtenidas
$n=mysqli_num_rows($r);

/*
//traer primera fila como un arreglo asociado
$row=mysqli_fetch_assoc($r);
*/

print "Numero de usuarios: ".$n."<br>";
//traer todas las filas
//mientras existan registros
while($row=mysqli_fetch_assoc($r)){
    print $row["nombres"]." ".$row["apellidos"]."<br>";
}

?>