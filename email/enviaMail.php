<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envia Email</title>
</head>
<body>
    <?php
    if(isset($_POST["edo"])){
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $correo=$_POST["correo"];
        $comentario=$_POST["comentario"];
        if($nombre==""){
            print "el nombre es obligatorio<br>";
        }else if($apellido==""){
            print "el apellido es obligatorio<br>";
        }else if($correo==""){
            print "el correo es obligatorio<br>";
        }else if($comentario==""){
            print "el comentario es obligatorio<br>";
        }else{
            $mail="mesconilucas2877@gmail.com";
            $mensaje="$nombre $apellido ha enviado un mail.\r\n";
            $mensaje.="Su mail es $correo y su mensaje es:\r\n";
            $mensaje.=$comentario;

            $headers="MIME-Version: 1.0\r\n";
            $headers.="Content-type:text/html; charset=UTF-8\r\n";
            $headers.="From: ".$_POST["correo"]."\r\n";
            $headers.="Repaly-to: $correo\r\n";
            //$headers.="Cc: ".$_POST["correo"]."\r\n";

            $asunto="$nombre $apellido ha enviado un mail";

            if(mail($mail,$asunto,$mensaje,$headers)){
                print "Su comentario ha sido enviado correctamente";
            }else{
                print "Error en el envío de su correo, intentar mas tarde";
            }
        }
    }else{
    ?>

    <form action="enviaMail.php" method="post">
        Nombre: <input type="text" name="nombre"><br>
        Apellido: <input type="text" name="apellido"><br>
        Correo: <input type="text" name="correo"><br>
        Comentario: <br>
        <textarea name="comentario" cols="50" rows="6" wrap="off"></textarea>
        <br>
        <input type="submit" value="Enviar">
        <!--edo = estado-->
        <input type="hidden" value="1" name="edo">
    </form>

    <?php
    }
    ?>

</body>
</html>