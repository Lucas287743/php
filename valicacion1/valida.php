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
        $nombre=$_GET["nombre"];

        if($nombre==""){
            print "<p>Error: no escribiste tu nombre</p>";
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
            print "<p>Error, no hay pasatiempos</p>";
        }
    ?>
</body>
</html>