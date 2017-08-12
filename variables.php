<?php

$variable = "Taller PHP";
$variable2 = 99;

$array = [1,2,3,4,5,6,7,8,9, "numero 10"];

$num1 = 2;
$num2 = 2;

echo $num1 + $num2.'<br>';
echo $num1 - $num2.'<br>';
echo $num1 * $num2.'<br>';
echo $num1 / $num2.'<br>';

//var_dump($variable);

//var_dump($variable2);

//var_dump($array);

$listado = [
    "tarea1" => [
        "nombre" => "Ir al taller de PHP",
        "realizada" => true
    ],
    "tarea2" => [
        "nombre" => "Ir por cafe",
        "realizada" => false
    ]
];

//var_dump($listado);
echo '<br>';

var_dump($listado["tarea1"]);