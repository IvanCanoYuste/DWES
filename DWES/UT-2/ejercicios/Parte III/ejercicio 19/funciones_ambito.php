<?php

//function ambito1()
//{
//    $var2 = $var1;
//    echo "Pasando por el ambito1()";
//    echo var_dump($var2) . "<br>";
//
//}

function ambito2()
{
    global $var1;
    $var2 = $var1;
    echo "Pasando por el ambito2()";
    echo var_dump($var2) . "<br>";
}

function ambito3()
{
    global $var1;
    $var1++;
    echo "Pasando por el ambito3():", $var1, "<br>";
}

?>