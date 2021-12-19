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
for ($i = 1; $i <= $param; $i++) {
    echo fibonacci($n)." ";
    $n++;
}
