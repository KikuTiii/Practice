<?php

// Variáveis String
$name = "Matheus kikuti";
$email = "matheus.kikuti@rappi.com";
$work = "Rappi";
$course = "ADS";

// Variáveis Int
$age = 19;
$phone = 11999999999;
$cep = 99999999;

// Variáveis Float
$height = 1.75;
$weight = 70.5;
$imc = $weight / ($height * $height);

// Variáveis Boolean
$true = true;
$false = false;

echo"<h1>Olá, meu nome é $name, tenho $age anos e trabalho na $work.</h1>\n";
echo"<h2>Meu email é {$email} e meu telefone é {$phone}.</h2>\n";
echo"<h3>Meu CEP é {$cep} e curso {$course}.</h3>\n";
?>