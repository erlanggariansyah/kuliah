<?php

function tunjanganKeluarga () {
    echo "Input nama: \n";
    $nama = trim(fgets(STDIN));
    echo "Apakah kamu sudah menikah?\n";
    echo "1 Sudah\n";
    echo "2 Belum\n";
    $status = trim(fgets(STDIN));

    if ($status == 1) {
        echo "Berapa jumlah anak?\n";
        $jmlAnak = trim(fgets(STDIN));
        $tunjangan = $jmlAnak > 3 ? 3 * 5 : $jmlAnak * 5;
        $tunjanganTotal = $tunjangan + 10;
        echo "$nama mendapatkan $tunjanganTotal% tunjangan dari total gaji.";
    } else {
        echo "$nama tidak mendapatkan tunjangan.";
    }
}

tunjanganKeluarga();

// Erlangga Riansyah, 1TI18
// Dasar-dasar Pemrograman, STT Terpadu Nurul Fikri

?>
