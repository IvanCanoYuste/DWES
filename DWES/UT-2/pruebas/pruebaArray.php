<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <?php
/*
 $ganadores = [[1, 12, 3], [1, 2, 3, 4, 5], [4, 8, 2, 3]];
 $ganadores[] = 5;
 //echo $ganadores[3];
 $ganadores2; $ganadores2[0] = 3; //echo $ganadores2[0]; $cantidad = sizeof($ganadores); //echo $cantidad; //echo sizeof($ganadores[0]); $pantalla = array_values($ganadores); print_r($pantalla); 
 echo var_dump($ganadores);
 */


$ganadores = array(
    "Fiestas 2021" =>
        array(
        "Tenis" => "Maria Alonso",
        "Ajedrez" => "Antonio Lopez",
        "Pin pon" => "Ana Benito",
        "Mus" => "Luis Martin"),
    "Fiestas 2022" =>
        array(
        "Tenis" => "Maria Alonso",
        "Ajedrez" => "Antonio Lopez",
        "Pin pon" => "Ana Benito",
        "Mus" => "Luis Martin")
);

foreach ($ganadores as $año => $competiciones) {
    echo "En $año estos fueron los gnadores:<br>";
    foreach ($competiciones as $valor) {
        echo "$valor<br>";
    }

}

foreach ($ganadores as $año => $competiciones) {
    echo "En $año estos fueron los ganadores:<br>";
    foreach ($competiciones as $competicion => $ganador) {
        echo "En el $competicion ganó";
    }

}





?>
</body>

</html>