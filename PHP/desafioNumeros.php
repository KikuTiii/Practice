<?php

$listaNumeros = array();
$index = 1;
$soma = 0;
$min = null;
$max = null;
$par = array();
$impar = array();

while($index != 0){
    echo"Digite o {$index}° número: ";
    $number = trim(fgets(STDIN));
    $index++;
    if($number != 0)
        array_push($listaNumeros, $number);
    else
        $index = 0;
}

foreach($listaNumeros as $numero){
    $soma += $numero;
    if($min == null || $numero < $min)
        $min = $numero;
    if($max == null || $numero > $max)
        $max = $numero;

    if($numero % 2 == 0)
        array_push($par, $numero);
    else
        array_push($impar, $numero);
}

echo"Pares: {$par[0]}";
foreach($par as $numero){
    if($numero != $par[0])
        echo", {$numero}";
}

echo"\nÍmpares: {$impar[0]}";
foreach($impar as $numero){
    if($numero != $impar[0])
        echo", {$numero}";
}

echo"\nSoma: {$soma}\n";
echo"Mínimo: {$min}\n";
echo"Máximo: {$max}\n";
?>