<?php
declare(strict_types=1);

function gig(int $number): bool {
    $str = (string)$number;
    return $str === strrev($str);
}

$numbers = [12321, 12345, 1221, 123321, 7, 1234321, 123];

foreach ($numbers as $num) {
    if (gig($num)) {
        echo "Число $num читается одинаково слева направо и справа налево\n";
    } else {
        echo "Число $num НЕ читается одинаково слева направо и справа налево\n";
    }
}