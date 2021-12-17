<?php
//Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta


 $array = [];
 while (count($array)!= 15) {
     $array[rand(0, 50)]= 1;
 }
 $array2 = array_keys($array);
 var_dump($array2);



?>