<?php
declare(strict_types=1);

function sumSecondaryDiagonal(array $matrix): int|float {
    $s = count($matrix);
    $sum = 0;
    
    for ($i = 0; $i < $s; $i++) {
        $j = $s - 1 - $i;
        $sum += $matrix[$i][$j];
    }
    
    return $sum;
}

$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo "Матрица:\n";
foreach ($matrix as $row) {
    echo implode(" ", $row) . "\n";
}

$result = sumSecondaryDiagonal($matrix);
echo "\nСумма элементов побочной диагонали: $result";
