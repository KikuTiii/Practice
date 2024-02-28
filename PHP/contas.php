    <?php

    echo"Digite o número correspondente a operação desejada:";
    $numeroDigitado = trim(fgets(STDIN));

    echo"Digite um número inteiro: ";
    $number = trim(fgets(STDIN));

    $soma = 0;
    $multiplicacao = 0;
    $divisao = 0;
    $subtracao = 0;
    $potencia = 0;
    $resto = 0;

    if($numeroDigitado == 1){
        for($i = 1; $i <= 10; $i++){
            $soma += $number + $i;
            echo"$number + " . $i . " = " . $soma . "\n";
        }
    }
    elseif($numeroDigitado == 2){
        for($i = 1; $i <= 10; $i++){
            $multiplicacao = $number * $i;
            echo"$number * " . $i . " = " . $multiplicacao . "\n";
        }
    }
    elseif($numeroDigitado == 3){
        for($i = 1; $i <= 10; $i++){
            $divisao = $number / $i;
            echo"$number / " . $i . " = " . number_format($divisao, 2) . "\n";
        }
    }
    elseif($numeroDigitado == 4){
        for($i = 1; $i <= 10; $i++){
            $subtracao = $number - $i;
            echo"$number - " . $i . " = " . $subtracao . "\n";
        }
    }
    elseif($numeroDigitado == 5){
        for($i = 1; $i <= 10; $i++){
            $potencia = $number ** $i;
            echo"$number ** " . $i . " = " . $potencia . "\n";
        }
    }
    elseif($numeroDigitado == 6){
        for($i = 1; $i <= 10; $i++){
            $resto = $number % $i;
            echo"$number % " . $i . " = " . $resto . "\n";
        }
    }
    else{
        echo"Opção inválida!";
    }
    ?>