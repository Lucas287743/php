<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="valida.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <br><br>
        <input type="checkbox" name="pasatiempos[]" value="Futbol">Futbol
        <input type="checkbox" name="pasatiempos[]" value="Videojuegos">Videojuegos
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>