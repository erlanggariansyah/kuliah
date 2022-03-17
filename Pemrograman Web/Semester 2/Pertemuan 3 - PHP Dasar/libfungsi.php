<?php

function kelulusan($nilai) {
    if ($nilai > 55) {
        return 'LULUS';
    } else {
        return 'TIDAK LULUS';
    }
}

function grade($nilai) {
    if ($nilai >= 0 && $nilai <= 35) {
        echo "E";
    } else if ($nilai >= 36 && $nilai <= 55) {
        echo "D";
    } else if ($nilai >= 56 && $nilai <= 69) {
        echo "C";
    } else if ($nilai >= 70 && $nilai <= 84) {
        echo "B";
    } else if ($nilai >= 85 && $nilai <= 100) {
        echo "A";
    } else {
        echo "I";
    }
}

function predikat($grade) {
    switch ($grade) {
        case 'A':
            echo "SANGAT MEMUASKAN";
            break;
        
        case 'B':
            echo "MEMUASKAN";
            break;
        
        case 'C':
            echo "CUKUP";
            break;
        
        case 'D':
            echo "KURANG";
            break;

        case 'E':
            echo "SANGAT KURANG";
            break;

        case 'I':
            echo "TIDAK ADA";
            break;
        default:
            break;
    }
}
