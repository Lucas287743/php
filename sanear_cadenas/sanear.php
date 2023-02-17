<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function sanear($string){
        //quitar los elementos en blanco del lado derecho e izquierdo
        $string=trim($string);
        $string= str_replace(
            array("à","â","ä","ª","À","Â","Á","Ä"),
            array("a","a","a","a","A","A","A","A"),
            $string
        );
        $string= str_replace(
            array("ç","Ç"),
            array("c","C"),
            $string
        );
        return $string;
    }
    echo sanear("ààâÂÂ");
    
    ?>
</body>
</html>