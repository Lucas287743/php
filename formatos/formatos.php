<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formatos</title>
</head>
<body>
    <?php
    $monto=5000;
    $tasaIVA=0.21;
    $montoIVA=$monto*$tasaIVA;
    $granTotal=$monto+$montoIVA;

    $retIVA=0.333333;

    $total=$granTotal-$granTotal*$retIVA;

    //muestra en pantalla
    printf("<p>Total:   $%6.2f</p>",$total) ;

    //devuelve string
    $str=sprintf("<p>Total:   $%6.2f</p>",$total);

    $strMonto=number_format($total,1);
    print $strMonto;
    ?>
</body>
</html>