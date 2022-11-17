<?php



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <h1>Credenciales de usuario</h1>
    <form action="./seguir.php" method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" />
        <label for="pass">Contraseña:</label>
        <input type="text" name="pass" />
        <input type="submit" name="enviar" value="Enviar" />
    </form>

</body>

</html>