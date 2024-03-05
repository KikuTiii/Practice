<?php

    include 'classeSocialFuncao.php';

    echo"Digite sua renda: ";
    $salario = trim(fgets(STDIN));
    
    $qtdSalariosMinimos = number_format(calcularQtdSalariosMinimos($salario), 2);
    $classe = classeSocial($qtdSalariosMinimos);

    echo"A quantidade de salários mínimos que você recebe é: " . $qtdSalariosMinimos . "\n";
    echo"A sua classe social é: " . $classe . "\n";
?>