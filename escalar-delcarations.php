<?php

function calcular_area_triangulo(int $base, int $altura, string $nombre) {
   return "Hola $nombre, El área de tu triangulo es: " . ($base * $altura) / 2;
}

echo calcular_area_triangulo(10, 20, "Anthony");

echo "\n";