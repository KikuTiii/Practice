<?php

$foods = array("apple", "orange", "banana", "grape", "watermelon");

$foods[0] = "apple";
array_push($foods, "orange"); // Adiciona um elemento no final do array
array_unshift($foods, "banana"); // Adiciona um elemento no início do array
array_pop($foods); // Remove o último elemento do array
array_shift($foods); // Remove o primeiro elemento do array
array_splice($foods, 1, 2); // Remove elementos do array

foreach($foods as $food){ // foreach é um laço de repetição que percorre um array
    echo"$food\n";
}
?>