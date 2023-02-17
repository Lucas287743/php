<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>archivos de datos</title>
</head>
<body>
    <?php
    $archivo="datos.txt";
    //crear un archivo
    //touch($archivo);
    //borrar
    //unlink($archivo);

    //bloquear archivos con flock
    /*
    1 solo lectura
    2 evitar leer o escribir, es solo nuestro
    3 desbloquea el archivo
    */

    $bandera=false;
    $maximo=100000;
    $contador=0;
    while(!$bandera){
        if(is_writable($archivo)){
            $bandera=true;
            break;
        }
        $contador++;
        if($contador>$maximo){
            break;
        }
    }

    //"r" lectura (no modifica). "w" escritura (borra el contenido anterior). "a" añadir (escribe al final)
    
    if($bandera){
        $linea1="Ayudaaaaaaaaa\n";
        $linea2="Heeeeeeeeeelp";
        //sobreescribir el archivo
        $archivoID=fopen($archivo,"w");
        //Bloqueamos el archivo
        flock($archivoID,2);
        fwrite($archivoID,$linea1);
        fwrite($archivoID,$linea2);
        //desbloqueamos el archivo
        flock($archivoID,3);
        fclose($archivoID);
    }
    

    /*
    //añadir lineas al final
    $archivoID=fopen($archivo,"a");
    $linea1="Ayudaaaaaaaaa\n";
    $linea2="Heeeeeeeeeelp\n";
    fwrite($archivoID,$linea1);
    fwrite($archivoID,$linea2);
    fclose($archivoID);
    */

    //abrir un archivo
    $archivoID=fopen($archivo,"r");
    //mientras no sea el fin del archivo
    while(!feof($archivoID)){
        //lee los 1024 caracteres de la linea
        $linea=fgets($archivoID,1024);
        print "<p>".$linea."</p>";
    }
    fclose($archivoID);

    ?>
</body>
</html>