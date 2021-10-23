<?php

function hitungGaji() {
    
    echo "Input nama: \n";
    $nama = trim(fgets(STDIN));

    echo "\nPilih Jabatan\n";
    echo "1 Kasir\n";
    echo "2 Supervisor\n";
    echo "3 Manager\n";
    echo "Yang mana jabatanmu?\n";
    $jabatan = trim(fgets(STDIN));

    echo "\nJumlah hari kerja:\n";
    $hariKerja = trim(fgets(STDIN));

    if ($jabatan == 1) {
        $gaji = 75000 * $hariKerja;
        echo "$nama memiliki gaji perbulan sebesar Rp.$gaji";
    } else if ($jabatan == 2) {
        $gaji = 120000 * $hariKerja;
        echo "$nama memiliki gaji perbulan sebesar Rp.$gaji";
    } else if ($jabatan == 3) {
        $gaji = 150000 * $hariKerja;
        echo "$nama memiliki gaji perbulan sebesar Rp.$gaji";
    } else {
        echo "Maaf input tidak valid.";
    }

}

hitungGaji();

// Erlangga Riansyah, TI18
// Dasar-dasar Pemrograman, STT Terpadu Nurul Fikri

?>
