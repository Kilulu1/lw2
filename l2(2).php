<?php

function sumSecondaryDiagonal(array $matrix): int {
    $sum = 0;
    $n = count($matrix);
    for ($i = 0; $i < $n; $i++) {
        $sum += $matrix[$i][$n - 1 - $i];
    }
    return $sum;
}

$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

echo "Сумма элементов побочной диагонали: " . sumSecondaryDiagonal($matrix);
?>