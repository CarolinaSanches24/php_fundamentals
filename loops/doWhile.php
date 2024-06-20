<?php

do {
    echo "Por favor, forneça a idade: ";
    $input = trim(fgets(STDIN));
    $age = (int)$input;

    echo "A idade é $age. ";
    if ($age >= 18) {
        echo "Maior de idade.\n";
    } else {
        echo "Menor de idade.\n";
    }
} while ($age >= 18);
