<?php

function gato() {
    echo "meow";
}

function perro() {
    echo "woof";
}

function gallo() {
    echo "kikiriki";
}

$funcion = readline("Escribe cual funcion quieres ejecutar:   ");

$funcion();
echo "\n";