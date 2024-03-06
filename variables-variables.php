<?php

$signo = "piscis";
$$signo = "ES un signo";

echo $piscis;
echo "\n";

## Another example. 
$nombre = "Carlos";
$edad = 12;
$equipo = "boca";

$variable = "equipo";
echo $$variable;
echo "\n";

## Another example. 
$dog = "woof";
$cat = "meow";
$horse = "jijiji";

$option = 2;

switch ($option) {
    case 1:
        $var = "dog";
        break;
    case 2:
        $var = "horse";
        break;
    
    default:
        # code...
        break;
}

echo $$var;
echo "\n";

?>