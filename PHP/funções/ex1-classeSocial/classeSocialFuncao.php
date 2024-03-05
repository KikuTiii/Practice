<?php

function calcularQtdSalariosMinimos($salario){
    $salarioMinimo = 1045.00;
    return $salario / $salarioMinimo;
}

function classeSocial($qtdSalariosMinimos){
    if($qtdSalariosMinimos <= 2){
        return "E";
    }else if($qtdSalariosMinimos <= 4){
        return "D";
    }else if($qtdSalariosMinimos <= 10){
        return "C";
    }else if($qtdSalariosMinimos <= 20){
        return "B";
    }else{
        return "A";
    }
}
?>