<?php

function get_conutry_name($country) {
    return match($country) {
        "MX" => "méxico",
        "COL" => "colombia",
        "EEUU" => "estados unidos",
        default => "lo siento, no conozco ese país"
    };
}

echo get_conutry_name("COL");
echo "\n";