<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foto</title>
</head>
<body>
    <?php
    //viene un arreglo de la foto, que tambien contiene un nombre temporal
    if(is_uploaded_file($_FILES["foto"]["tmp_name"])){
        $nombre="foto".date("YmdHis");
        print $nombre;
        //copia de la zona temporal
        copy($_FILES["foto"]["tmp_name"],"fotos/$nombre.jpg");
    }else{
        print "Error en la carga de archivos";
    }
    ?>
</body>
</html>