<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optimizar Foto</title>

    <?php
    $foto=$_GET["foto"];
    ?>

    <script>
        function regresar(){
            //le decimos que se habra tablaFotos en la misma pagina
            window.open("tablaFotos.php",'_self');
            return false;
        }

        function optimizarImagen(foto){
            var op=document.getElementById("op").value;
            var nombre=document.getElementById("nombre").value;
            window.open("optimizarImagen.php?foto="+foto+"&op="+op+"&nombre="+nombre, '_self');
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

    <p>Selecciona una opcion para reducir la foto en forma proporcional</p>
    <form>
        <select name="" id="op">
            <option value="75">75%</option>
            <option value="50">50%</option>
            <option value="25">25%</option>
            <option value="10">10%</option>
            <option value="5">5%</option>
        </select>
        <br><br>
        <label for="nombre">Nombre de la nueva imagen:</label>
        <br><input type="text" id="nombre" name="nombre"/><br><br>
        <input type="button" value="Optimizar" onclick="optimizarImagen('<?php print $foto;?>');">
        <input type="button" value="Regresar" onclick="regresar();">
    </form>
</body>
</html>