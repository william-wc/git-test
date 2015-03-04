<?php
    $num = 7;

    if($num <= 1) {
        echo "Não é primo";
    } else if($num <= 3) {
        echo "É primo";
    } else {
        $found = true;
        for($i = 3; $i * $i <= $num; $i+=2) {
            if($n % $i == 0) {
                echo "Não é primo";
                $found = false;
                break;
            }
        }

        if($found) {
            echo "É primo";
        }
    }
?>