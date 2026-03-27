<?php
declare(strict_types=1);

function gig(array $arr): bool {
    $n = count($arr);
    
    if ($n <= 2) {
        return true;
    }
    
    for ($i = 1; $i < $n - 1; $i++) {
        $gug = $arr[$i] > $arr[$i - 1] && $arr[$i] > $arr[$i + 1];
        $gog = $arr[$i] < $arr[$i - 1] && $arr[$i] < $arr[$i + 1];
        
        if (!($gug || $gog)) {
            return false;
        }
    }
    
    return true;
}

$test = [
    [1, 3, 2, 4, 3],   
    [1, 2, 3, 2, 1],    
    [1, 2, 1, 2, 1],    
    [5, 3, 4, 2, 3],   
    [1, 2],           
    [1],             
    [1, 2, 3, 4, 5],   
    [5, 4, 3, 2, 1],   
    [1, 3, 2, 2, 3]    
];

foreach ($test as $arr) {
    $result = gig($arr);
    echo "[" . implode(", ", $arr) . "] - ";
    echo $result ? "✓ зигзаг\n" : "✗ не зигзаг\n";
}
