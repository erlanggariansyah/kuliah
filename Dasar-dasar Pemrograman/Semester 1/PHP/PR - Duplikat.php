<?php

function duplikat(Array $param) {
    $hasil;

    for ($i = 0; $i <= 1; $i++) {
        foreach ($param as $par) {
            $hasil[] = $par;
        }
    }

    return $hasil;
}

$parameter = ['a', 'b', 'c'];

$d = duplikat($parameter);

print_r($d);
