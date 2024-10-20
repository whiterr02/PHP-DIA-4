<?php
//Condicion 1
    $valor = rand(1, 10);
    echo "El valor sorteado es $valor" . PHP_EOL;
    if ($valor <= 5) {
        echo "El valor es menor o igual a 5";
    } else {
        echo "El valor es mayor a 5";
    }

//Condicion 2
    echo PHP_EOL;
    $valor = rand(1, 100);
    echo "El valor sorteado es $valor" . PHP_EOL;
    if ($valor <= 9) {
        echo "Tiene un dígito";
    } else {
        if ($valor < 100) {
            echo "Tiene dos dígitos";
        } else {
            echo "Tiene tres dígitos";
        }
    }

//Condicion 3
    echo PHP_EOL;
    $valor = rand(1, 100);
    echo "El valor sorteado es $valor" . PHP_EOL;
    if ($valor <= 9) {
        echo "Tiene un dígito";
    } elseif ($valor < 100) {
        echo "Tiene dos dígitos";
    } else {
        echo "Tiene tres dígitos";
    }
    ?>