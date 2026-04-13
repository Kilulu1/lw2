<?php
declare(strict_types=1);

$x = 2;
$y = 3;

if ($x === 0 && $y === 0) {
    $result = "Точка находится в начале координат";
} elseif ($x === 0) {
    $result = "Точка лежит на оси Y";
} elseif ($y === 0) {
    $result = "Точка лежит на оси X";
} elseif ($x > 0 && $y > 0) {
    $result = "Точка находится в I четверти";
} elseif ($x < 0 && $y > 0) {
    $result = "Точка находится во II четверти";
} elseif ($x < 0 && $y < 0) {
    $result = "Точка находится в III четверти";
} elseif ($x > 0 && $y < 0) {
    $result = "Точка находится в IV четверти";
} else {
    $result = "Некорректные координаты";
}

echo "Точка ($x, $y): $result\n";
echo "Типы данных: x=" . gettype($x) . ", y=" . gettype($y) . "\n";