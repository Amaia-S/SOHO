<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hola <?php echo $_POST["nombre"];?>
    Tu email es: <?php echo $_POST["email"];?>
    El motivo por el que contacta con nosotros es: <?php echo $_POST["asunto"];?>
    Su consulta es:<?php echo $_POST["mensaje"];?>
</body>
</html>