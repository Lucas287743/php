<?php
if($_GET["foto"]==false){
    header("location:tablaFoto.php");
    exit;
}
$foto=$_GET["foto"];
$porcien=$_GET["op"];
$nombre=$_GET["nombre"];

$archivo="fotos/".$foto;

$info=getimagesize($archivo);

$ancho=$info[0];
$alto=$info[1];
$tipo=$info["mime"];

$nuevoAncho=$ancho*($porcien/100);
$nuevoAlto=$alto*($porcien/100);

switch($tipo){
    case "image/jpg":
    case "image/jpeg":
        $imagen=imagecreatefromjpeg($archivo);
        break;
    case "image/png":
        $imagen=imagecreatefrompng($archivo);
        break;
    case "image/gif":
        $imagen=imagecreatefromgif($archivo);
        break;
}

$lienzo=imagecreatetruecolor($nuevoAncho,$nuevoAlto);

imagecopyresampled($lienzo,$imagen, 0,0, 0,0, $nuevoAncho, $nuevoAlto,$ancho,$alto);

//graba fisicamente la imagen en la carpeta fotos/, con la calidad de 80
imagejpeg($lienzo,"fotos/".$nombre,80);

header("location:tablaFotos.php");
?>