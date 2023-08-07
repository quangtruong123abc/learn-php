<?php

    $x = 3; 
    $n = 5; 
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $x * (2 * $i);
    }
    $result = $sum;
    echo "Tổng Sum = " . $result;
// Vòng lặp for tính tổng  S = x*2 + x*4 + ⋯ + x*2n

?>
