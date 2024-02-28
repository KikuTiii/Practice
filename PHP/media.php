<?php

echo "Digite a primeira nota: ";
$nota1 = trim(fgets(STDIN));

echo "Digite a segunda nota: ";
$nota2 = trim(fgets(STDIN));

$media = ($nota1 * 0.4 + $nota2 * 0.6);
echo "A média do aluno é: $media \n";
?>
