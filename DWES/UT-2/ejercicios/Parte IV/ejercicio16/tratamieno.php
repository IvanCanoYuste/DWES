<?php

$error = "Error no hay datos completados.";
if (isset($_POST["enviar"])) {
    if (!empty($_POST["rol"]) && !empty($_POST["acceso"]) && !empty($_POST["permisos"])) {

        var_dump($_POST["permisos"]);
        exit;
    } else
        echo $error;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inmobilaria</title>
    <style type="text/css">
        form {
            margin: 0 auto;
            margin-top: 5%;
            border: 2px solid black;
            width: 36%;
        }

        table {
            margin: 0px auto;
        }

        #botones {
            background-color: blue;
            text-align: center;
        }

        td {
            border: 1px solid black;
            padding: 20px;
        }
    </style>
</head>

<body>
    <form action="" method="POST">
        <table>

            <tr>
                <td colspan="2">
                    Rol:

                    <input type="radio" name="rol" value="Administrador">Administrador
                    <input type="radio" name="rol" value="Usuario">Usuario

                </td>
            </tr>
            <tr>
                <td>
                    Acceso:
                    <select name="acceso">
                        <option value="datos">Gestion Datos</option>
                        <option value="informes">Gestion Informes</option>
                        <option value="permisos y reconocimientos">Gestion Permisos y Reconocimientos</option>
                        <option value="sanciones">Gestion Sanciones</option>
                    </select>
                </td>
                <td>
                    Permisos:<br>

                    <input type="checkbox" name="permisos[L]" value="lectura">Lectura<br>
                    <input type="checkbox" name="permisos[E]" value="escritura">Escritura<br>
                    <input type="checkbox" name="permisos[X]" value="ejecucion">Ejecucion


                </td>
            </tr>
            <tr>
                <td colspan="2" id="botones">
                    <input type="submit" value="Eliminar Datos" name="eliminar">
                    <input type="submit" value="Seguir" name="enviar">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>