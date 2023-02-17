<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Foto</title>

    <?php
    $foto=$_GET["foto"];
    ?>

    <script>
        function regresar(){
            //le decimos que se habra tablaFotos en la misma pagina
            window.open("tablaFotos.php",'_self');
            return false;
        }

        function borrarImagen(foto){
            window.open("borraImagen.php?foto="+foto, '_self');
        }
    </script>
</head>
<body>
    <?php
    print '<table border="1">';

    print "<tr>";

    print "<th>Imagen</th>";
    print "<th>Archivo</th>";
    print "<th>Ancho (px)</th>";
    print "<th>Alto (px)</th>";
    print "<th>Tamaño (bytes)</th>";

    print "</tr>";
    
    $archivo="fotos/$foto";
    $info=getimagesize($archivo);

    print "<tr>";
    
    print "<td>";
    print "<img src='fotos/$foto' width='120px' height='120px'>";
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

    //print '</tr';

    print '</table>';
    ?>
    <p>Advertencia: Luego de borrar, será imposible recuperarse</p>
    <br>
    <form>
        <input type="button" value="Borrar" onclick="borrarImagen('<?php print $foto;?>');">
        <input type="button" value="Regresar" onclick="regresar();">
    </form>
</body>
</html>