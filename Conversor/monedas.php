<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de monedas</title>
</head>
<body>
    <?php
    if(isset($_POST["estado"])){
        $estado=$_POST["estado"];
        if($estado=="1"){
            $tc=194.94;
            $cantidad=$_POST["cantidad"];
            $tipo=$_POST["tipo"];
            if($tipo=="1"){
                $r=$cantidad * $tc;
                $rc=number_format($r,5);
                print "La cantidad es $rc pesos por $cantidad de dólares al tipo de cambio $tc";
            }
            if($tipo=="2"){
                $r=$cantidad / $tc;
                $rc=number_format($r,2);
                //tcd es tipo de cambio dolar
                $tcd= number_format(1/$tc,5);
                print "La cantidad es $rc dólares por $cantidad de pesos al tipo de cambio $tcd";
            }
        }
    }else{
    ?>    
    
    <form action="monedas.php" method="post">
        Introduzca la cantidad a convertir: <input type="text" name="cantidad" size="10"/>
        <br><br>
        Seleccione el tipo de conversion: <br>
        <input type="radio" name="tipo" value="1" checked>Dólares<br>
        <input type="radio" name="tipo" value="2">Pesos<br>
        <input type="submit" value="Convertir">
        <input type="hidden" name="estado" value="1">
    </form>
    
    <?php
    }
    ?>
</body>
</html>