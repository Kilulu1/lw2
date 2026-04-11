<?php

function isSortedAscending(array $arr): bool {
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] < $arr[$i - 1]) {
            return false;
        }
    }
    return true;
}

$arr = [1, 2, 3, 4, 5];
echo isSortedAscending($arr) ? "Отсортирован" : "Не отсортирован";
echo "<br>";

$arr2 = [5, 4, 3, 2, 1];
echo isSortedAscending($arr2) ? "Отсортирован" : "Не отсортирован";
echo "<br>";

$arr3 = [1, 3, 2, 4, 5];
echo isSortedAscending($arr3) ? "Отсортирован" : "Не отсортирован";