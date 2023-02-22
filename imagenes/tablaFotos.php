<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leer Fotos</title>
</head>
<body>
    <?php
    function validaFoto($foto){
        $esFoto=false;
        //preg_match es una Expresion REGular
        //el $ al final, significa buscar que el string contenga tal fragmento al final
        //el ^ al comienzo, sifnifica encontrar al principio
        //i significa insensitive, que mayusculas y minusculas son la misma
        if(preg_match("/jpg$/i",$foto)) $esFoto=true;
        if(preg_match("/gif$/i",$foto)) $esFoto=true;
        if(preg_match("/png$/i",$foto)) $esFoto=true;
        return $esFoto;
    }

    //abrir el directorio fotos
    $dir=opendir("fotos");
    $numCol=1;
    if($dir){
        print '<table border="1">';
        //esto es el encabezado
        print "<tr>";
        print "<th>Imagen</th>";
        print "<th>Archivo</th>";
        print "<th>Ancho (px)</th>";
        print "<th>Alto (px)</th>";
        print "<th>Tamaño (bytes)</th>";
        print "<th>Borrar</th>";
        print "<th>Optimizar (%)</th>";
        print "<th>Optimizar x ancho</th>";
        print "<th>Filtros</th>";
        print "</tr>";
        //termina encabezado

        print '<tr>';
        $i=0;
        //mientras se pueda leer el siguiente archivo
        while($foto = readdir($dir)){
            if($foto!="." && $foto!=".." && validaFoto($foto)){
                if($i==$numCol){
                    $i=0;
                    print "</tr>";
                    print "<tr>";
                }
                $i++;
                $archivo="fotos/$foto";
                //obtiene un arreglo de 7 elementos. La posicion 0 y 1 corresponden al ancho y alto
                $info=getimagesize($archivo);
                //td es table data, o celda
                print "<td>";
                //esto, no deberìa hacerse, sino optimiar las imagenes
                print "<img src='fotos/$foto' width='60px' height='60px'>";
                print "</td>";

                print "<td>";
                print $foto;
                print "</td>";

                print "<td>";
                print $info[0];
                print "</td>";

                print "<td>";
                print $info[1];
                print "</td>";

                print "<td>";
                print filesize($archivo);
                print "</td>";

                print "<td>";
                print "<a href='borrarFoto.php?foto=$foto'>Borrar</a>";
                print "</td>";

                print "<td>";
                print "<a href='optimizarFoto.php?foto=$foto'>Optimizar</a>";
                print "</td>";

                print "<td>";
                print "<a href='optimizarAncho.php?foto=$foto'>Optimizar</a>";
                print "</td>";

                print "<td>";
                print "<a href='filtrosImagen.php?foto=$foto'>Filtros</a>";
                print "</td>";
            }
        }
        print '</tr';
        print '</table>';
    }else{
        print "Error al abrir la carpeta";
    }
    ?>
</body>
</html>