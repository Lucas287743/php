<?php
require "conn/conn.php";
$id=1;

$sql="DELETE FROM usuarios WHERE idUsuario=$id;";

$r=mysqli_query($conn,$sql);

if($r){
    print "Se borró correctamente";
}else{
    print "Error al borrar";
}
?>