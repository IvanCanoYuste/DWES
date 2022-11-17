<?php

if (isset($_POST['enviar'])) {
    if (!empty($_POST['ciclos'])) {
        echo "El ciclo seleccionado ha sido: " . $_POST['ciclos'];
        exit;
    } else
        echo "Error. No hay opcion elegida";
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        ciclo:
        <select name="ciclos">
            <option value="fb">FP BASICA</option>
            <option value="gm">CFGM</option>
            <option value="gs">CFGs</option>
        </select>
        <input type="submit" name="enviar">
    </form>
</body>

</html>