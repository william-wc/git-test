<?php
    $p1 = 10;
    $m1 = 10;
    $m2 = 10;
    $proj1 = 10;
    $proj2 = 10;
    $proj3 = 10;
    $proj4 = 10;
    $trabF = 10;
    $proc = 10;
    $pf = 10;

    $mi = (30*$p1 + 10*$m1 + 10*$m2 + 5*$proj1 + 5*$proj2 + 5*$proj3 + 5*$proj4 + 10*$trabF + 20*$proc) / 100;

    if(mi >= 7.5) {
        $mf = $mi;
        echo "Aprovado sem Prova Final\nParabéns!!! Boas férias"
    } else {
        $aprovadoDireto = false;
        $mf = ($mi + $pf) / 2;
        if($mf >= 5 && !$aprovadoDireto) {
            echo "Aprovado com prova final\nAgora já pode descansar tranquilo.";
        } else {
            echo "Reprovado\nNão foi dessa vez. Ano que vem tem mais TWII.";
        }
    }

    echo "Media intermediaria: " + $mi +"\nMedia final: " + $mf;

?>