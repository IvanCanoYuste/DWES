<?php
if (isset($_POST['enviar']))
    $dato=$_POST['dato'];
    if (!empty($dato))
       if ($dato=="blanco")
       {
         echo "¡¡Acertaste!!";
         echo "Seguir con el juego...<a href='./saludos.php'>Seguir</a>";
         exit();
       } 
       else
          echo "Intentalo de nuevo";  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5. UT 3</title>
</head>
<body>
<!--target="_blank"-->    
    <form action="" method="POST">
        ¿De qué color es el caballo blanco de Santigo?:
        <input type="text" name="dato">
        <input type="submit" name="enviar">
    </form>    
</body>
</html>

