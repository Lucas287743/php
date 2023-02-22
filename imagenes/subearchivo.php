<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sube archivo</title>
</head>
<body>
    <!--con enctype multipart/form-data, indicamos que enviamos datos binarios-->
    <!-- action indica a donde enviamos el archivo-->
    <form enctype="multipart/form-data" action="foto.php" method="post">
        Subir foto: <input type="file" name="foto"/>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>