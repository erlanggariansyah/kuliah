<?php

echo "Masukkan nilai: ";
$param = trim(fgets(STDIN));

function faktorial ($param) {
    if ($param == 2) {
        return 2;
    }

    if ($param > 2) {
        return $param * faktorial($param - 1);
    }

    return 1;
}

$faktor = faktorial($param);

echo $faktor;
