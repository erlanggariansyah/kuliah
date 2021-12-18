<?php 

function balikan(Array $param) {
    $hasil = array();

    $i = 0;
    while ($i < count($param)) {
        array_push($hasil, $param[count($param) - $i - 1]);
        $i++;
    }

    print_r($hasil);
}

balikan(['a', 'b', 'c']);
