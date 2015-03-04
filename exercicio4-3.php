<?php
    $n = 5;
    $a = 0;
    $b = 1;

    for($i = 0; $i < $n; $i++) {
        echo $a + ",";
        $sum = $a + $b;
        $a = $b;
        $b = $sum;
    }
?>