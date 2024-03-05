<?php
    include "calculoAlunoFuncao.php";

    echo"Digite a primeira nota: ";
    $nota1 = trim(fgets(STDIN));

    echo"Digite a segunda nota: ";
    $nota2 = trim(fgets(STDIN));

    $media = number_format(calcularMedia($nota1, $nota2), 1);
    echo"A média do aluno é: " . $media . "\n";
?>