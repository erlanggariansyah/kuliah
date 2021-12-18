<?php

function konsonan(String $param) {
    $ks = ['a', 'i', 'u', 'e', 'o', ' '];

    for ($i = 0; $i < 6; $i++){
        $param = str_replace($ks[$i], '', $param);
    }

    echo $param;
}

konsonan('Nurul Fikri');
