<?php

$listafruta = array();


$numerofruta = 1;
$index = 1;

while($index != 0){
    echo"Digite o nome da fruta" . $numerofruta++ . ": " ;
    $frutaDigitada = trim((fgets(STDIN)));
    $index++;
    if(!$frutaDigitada == "0")
        array_push($listafruta, $frutaDigitada);
    else
        $index = 0;
}   

echo"Digite um nome de fruta para pesquisar: ";
$frutaPesquisada = trim((fgets(STDIN)));
$frutaEncontrada = false;

foreach($listafruta as $fruta){
    if($fruta == $frutaPesquisada){
        $frutaEncontrada = true;
        break;
    }
}

if(!$frutaEncontrada)
    echo"Nâo existe a fruta {$frutaPesquisada} na lista!\n";
else
    echo"A fruta {$frutaPesquisada} existe na lista!\n";

?>