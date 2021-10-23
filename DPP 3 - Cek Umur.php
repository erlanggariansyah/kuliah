<?php

function cekUmur() {
    echo "Input umur: \n";
    $umur = trim(fgets(STDIN));

    if ($umur <= 17) {
        echo "Maaf, anda tidak boleh menonton film ini.\n";
        echo "Jalankan program lagi? \n";
        echo "Input apa saja, jika setuju:\n";
        $isYes = trim(fgets(STDIN));

        if ($isYes) {
            cekUmur();
        }
    } else {
        echo "Selamat menonton.\n";
    }
}

cekUmur();
