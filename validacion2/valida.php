<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valida</title>
</head>
<body>
    <?php
        $error=$_GET["paginaError"];
        $hayError=false;

        $nombre=$_GET["nombre"];
        if($nombre==""){
            $hayError=true;
        }else{
            print "<p>bienvenido, $nombre</p>";
        }

        if(isset($_GET["pasatiempos"])){
            $pasatiempos=$_GET["pasatiempos"];
            $numPasatiempos=count($pasatiempos);
            print "$nombre tiene $numPasatiempos pasatiempos";
            print "<ol>";
            foreach($pasatiempos as $pasatiempo){
                print "<li>$pasatiempo</li>";
            }
            print "</ol>";
        }else{
            $hayError=true;
        }

        if(!$hayError){
            //enviar a otra pagina
            header("location: correcto.php");
            exit;
        }else{
            header("location: $error");
            exit;
        }
    ?>
</body>
</html>