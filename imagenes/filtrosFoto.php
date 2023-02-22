<?php
if($_GET["foto"]==false){
    header("location:tablaFoto.php");
    exit;
}
$foto=$_GET["foto"];
$filtro=$_GET["op"];
$nombre=$_GET["nombre"];

$archivo="fotos/".$foto;

$info=getimagesize($archivo);

$ancho=$info[0];
$alto=$info[1];
$tipo=$info["mime"];

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

if($filtro=="negativo"){
    imagefilter($imagen,IMG_FILTER_NEGATE);
}
if($filtro=="grises"){
    imagefilter($imagen,IMG_FILTER_GRAYSCALE);
}
if($filtro=="brillo"){
    imagefilter($imagen,IMG_FILTER_BRIGHTNESS,20);
}
if($filtro=="contraste"){
    imagefilter($imagen,IMG_FILTER_CONTRAST,20);
}

$lienzo=imagecreatetruecolor($ancho,$alto);

imagecopy($lienzo,$imagen, 0,0, 0,0, $ancho, $alto);

//graba fisicamente la imagen en la carpeta fotos/, con la calidad de 80
imagejpeg($lienzo,"fotos/".$nombre,80);

header("location:tablaFotos.php");
?>