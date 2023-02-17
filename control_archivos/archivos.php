<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo de Archivos</title>
</head>
<body>
    <?php

    $path="";
    //$archivo="datos.txt";
    $archivo=".";
    if(file_exists($path.$archivo)){
        if(is_file($path.$archivo)){
            print "Si existe el archivo $archivo";
            $tamanio=filesize($path.$archivo);
            $creado=filectime($path.$archivo);
            $modificado=filemtime($path.$archivo);
            if($tamanio <1024) $medida="b";
            if($tamanio >=1024 && $tamanio<1024000){
                $medida="Kb";
                $tamanio/=1000;
            }
            if($tamanio >1024000){
                $medida="Mb";
                $tamanio/=1000000;
            }

            $sCreado= date("d/m/Y H:i:s",$creado);
            $sModificado= date("d/m/Y H:i:s",$modificado);
        }
        
        if(is_dir($path.$archivo)){
            print "Si existe el directorio $archivo<br>";
            //mostrar archivos de una carpeta
            $dir=".";
            $dirID=opendir($dir);
            //mientras la asignacion sea correcta
            while($nombre=readdir($dirID)){
                print $nombre;
                if(is_dir($nombre)) print " > dir";
                if(is_file($nombre)) print " > archivo";
                print "<br>";
            }
            //cerrar el directorio
            closedir($dirID);
        }
    }else{
        print "No Existe $archivo";
    }

    
    ?>
</body>
</html>