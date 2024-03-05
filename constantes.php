<?php

define("MICHI", "Mr. Michi");
const PI = 3.14;

echo MICHI;
echo "\n";
echo PI;
echo "\n";

$decision = true;

if ($decision) {
    define("BLOCK_CONSTANT", "esta función es para demostrar el scope en constantes");

    echo BLOCK_CONSTANT;
    echo "\n";

}

echo PHP_OS;
echo "\n";
echo PHP_VERSION;
echo "\n";
echo __DIR__;
echo "\n";