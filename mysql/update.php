<?php
require "conn/conn.php";
$id=2;

$sql="UPDATE usuarios SET clave='54321' WHERE idUsuario=$id;";

$r=mysqli_query($conn,$sql);

if($r){
    print "Se modificó correctamente";
}else{
    print "Error al modificar";
}
?>