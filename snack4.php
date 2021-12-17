<?php
//Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta

$array15Number = [];

for ($i = 0; $i < 15; $i++) {
    $randomNumber = 0;
    if (!in_array($randomNumber, $array15Number)) {
        $randomNumber = rand(1, 50);
        $array15Number[] = $randomNumber;
    }
}

var_dump($array15Number)



?>