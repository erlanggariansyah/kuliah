<?php

$data = [2,5,8,12,16,23,38,56,72,91];
function binary_search($array, int $point, int $left, int $right) {
    if ($left > $right) return 0;
    $mid = round(($left + $right) / 2, 0, PHP_ROUND_HALF_UP);

    if ($array[$mid] == $point) {
        echo $mid;
    } else if ($array[$mid] > $point) {
        binary_search($array, $point, $left, $mid - 1);
    } else {
        binary_search($array, $point, $mid + 1, $right);
    }
}

echo binary_search($data, 8, 0, count($data) - 1);
