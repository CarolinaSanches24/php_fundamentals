<?php


$hour = 15; 


if ($hour >= 0 && $hour < 12) {
    echo "Bom dia!";
} elseif ($hour >= 12 && $hour < 18) {
    echo "Boa tarde!";
} elseif ($hour >= 18 && $hour < 24) {
    echo "Boa noite!";
} else {
    echo "Hora inválida!";
}
