<?php 

function fibonacci(Int $n) {
    if ($n == 0 || $n == 1) {
        return $n;
    } else {
        return (fibonacci($n - 1) + fibonacci($n - 2));
    }
}

echo "Masukkan batas deret: ";
$param = trim(fgets(STDIN));
$n = 1;

echo "Deret Fibonacci: ";
echo fibonacci($param);
echo "\nPenguraian: \n";

$f1 = 1;
$f2 = 1;
$next = 0;

$desc = "\n";
for ($i = 1; $i <= $param; $i++) {
    if ($i == 1) {
        echo $f1."+";
        continue;
    }

    if ($i == 2) {
        echo $f2." = 1\n";
        continue;
    }

    $next = $f1 + $f2;
    $f1 = $f2;
    $f2 = $next;

    if ($i != $param) {
        echo $next."+".$f1." = ".($f2+$f1)."\n";
    }
}
