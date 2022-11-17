<?php

if (isset($_POST['enviar'])) {
    if (!empty($_POST['modulos'])) {
        var_dump($_POST["modulos"]);
        echo "<br>";
        foreach ($_POST["modulos"] as $clave => $valor) {
            echo "Clave: " . $clave . "   " . "Modulo: " . $valor . "<br/>";
        }
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
        <input type="checkbox" name="modulos[DWES]" />Desarrollo Servidor<br />
        <input type="checkbox" name="modulos[DWEC]" />Desarrollo Cliente<br />
        <input type="checkbox" name="modulos[DI]" />Desarrollo Interfaces<br />
        <input type="checkbox" name="modulos[DA]" />Despliegue de aplicaciones<br />
        <input type="checkbox" name="modulos[EIE]" />Empresa e Iniciativa Emprendedora<br />
        <input type="submit" name="enviar">
    </form>
</body>

</html>