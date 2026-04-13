<?php

function isZigzag(array $arr): bool {
    $n = count($arr);
    if ($n < 3) return false;
    for ($i = 1; $i < $n - 1; $i++) {
        $prev = $arr[$i - 1];
        $curr = $arr[$i];
        $next = $arr[$i + 1];
        if (!(($curr > $prev && $curr > $next) || ($curr < $prev && $curr < $next))) {
            return false;
        }
    }
    return true;
}
var_dump(isZigzag([1, 3, 2, 4, 3]));
var_dump(isZigzag([1, 2, 3, 4])); 
var_dump(isZigzag([5, 1, 5, 1])); 