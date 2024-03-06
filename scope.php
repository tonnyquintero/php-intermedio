<?php

$outside_variable = "Esto es una variable global";

function my_function() {
# We need to put the word global so that the function can be accessed 
    global $outside_variable;
    echo $outside_variable;
}

my_function();
echo "\n";

?>