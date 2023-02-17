<?php
$nombre="datos";
//si se quiere guardar mas info, se separa con |
$valor="mesconilucas@gmail.com|Lucas|Mesconi|2023-02-16";
//para que la cookie expire luego de un dia
$fecha=time()+(60*60*24);

//si se quiere eliminar la galleta
//$fecha=time()-1;

setcookie($nombre,$valor,$fecha);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //leer cookies
    
    if(isset($_COOKIE["datos"])){
        $datos=$_COOKIE["datos"];
        //separamos los datos por la pipe
        $aDatos=explode("|",$datos);
        $mail=$aDatos[0];
        $nombre=$aDatos[1];
        $apellido=$aDatos[2];
        $fecha=$aDatos[3];
        print "Hola, $nombre $apellido, $mail, $fecha";
    }else{
        print "No existe la cookie";
    }
    ?>
</body>
</html>