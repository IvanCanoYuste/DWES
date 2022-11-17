<?php
require_once("./clase_ivan1.php");
require_once("./f_ivan1.php");
require_once("./datos_ivan1.inc");
$error = "";
if (isset($_POST["enviar"])) {


    if (validarAula()) {
        if (!empty($_POST["aula"]) && !empty($_POST["ciclos"]) && !empty($_POST["curso"])) {
            echo "En el centro se imparten " . determinarTecnologias($matriz) . " tecnologias<br><br>";
            echo devolverTecnologia($matriz);
            $clase = new Tecnologia($_POST["aula"], $_POST["ciclos"], $_POST["curso"]);
            echo $clase;
            exit;
        }

    } else
        $error = "No es un numero valido";

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
            width: 26%;
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
                    Aula <br />
                    <input type="text" name="aula" />*
                    <?php echo $error ?><br />
                </td>
            </tr>
            <tr>
                <td>
                    Ciclo:
                    <select name="ciclos">
                        <option value="SMR">SMR</option>
                        <option value="ASIR">ASIR</option>
                        <option value="DAW">DAW</option>
                        <option value="DAM">DAM</option>
                    </select>
                </td>
                <td>
                    Curso:<br>

                    <input type="radio" name="curso" value="Primero">Primero
                    <input type="radio" name="curso" value="Segundo">Segundo

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