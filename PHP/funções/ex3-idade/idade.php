<?php
    include "idadeFuncao.php";

    echo "Digite a idade: ";
    $idade = trim(fgets(STDIN));

    $calculoIdade = classificaIdade($idade);
?>