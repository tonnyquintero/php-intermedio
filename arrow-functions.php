<?php

$cajero = 1;

$add_cajero = fn($add) => $cajero + $add;

echo $add_cajero(20);

echo "\n";

$edades = [5, 38, 17, 20, 9, 50];

// Without arrow functions 
// $mayores_de_edad = array_filter($edades, function($current) {
//     return $current >= 18;
// });

// With arrow functions 
$mayores_de_edad = array_filter($edades, fn($current) => $current >= 18);



print_r($mayores_de_edad);
echo "\n";
