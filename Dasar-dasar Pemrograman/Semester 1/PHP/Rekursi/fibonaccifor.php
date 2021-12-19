<?php 

echo "Masukkan batas deret: ";
$n = trim(fgets(STDIN));
$f1 = 1;
$f2 = 1;
$next = 0;

for ($i = 1; $i <= $n; $i++){
    if ($i == 1) {
        echo " ".$f1." ";
        continue;
    }

    if ($i == 2) {
        echo $f2." ";
        continue;
    }

    $next = $f1 + $f2;
    $f1 = $f2;
    $f2 = $next;

    echo $next." ";
}
