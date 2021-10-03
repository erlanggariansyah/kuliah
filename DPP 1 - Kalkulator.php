<?php

// program kalkulator
function calculator() {

    // ambil nilai pertama
    echo "Masukkan nilai pertama: \n";
    $nilaiPertama = trim(fgets(STDIN));

    // ambil nilai kedua
    echo "\nMasukkan nilai kedua: \n";
    $nilaiKedua = trim(fgets(STDIN));

    // ambil nilai yang digunakan untuk mengidentifikasi operasi yang di-inginkan user
    echo "\nPilih operasi yang di-inginkan: \n";
    echo "1. Perkalian (X)\n";
    echo "2. Pembagian (/)\n";
    echo "3. Pertambahan (+)\n";
    echo "4. Pengurangan (-)\n";
    $operasi = trim(fgets(STDIN));

    // lakukan pengecekan sesuai pilihan diatas
    switch ($operasi) {

        // jika input user adalah 1, maka perkalian
        case 1:
            $hasil = $nilaiPertama * $nilaiKedua;
            echo "Hasil $nilaiPertama * $nilaiKedua adalah $hasil";
            break;
        
        // jika input user adalah 2, maka pembagian
        case 2:
            $hasil = $nilaiPertama / $nilaiKedua;
            echo "Hasil $nilaiPertama : $nilaiKedua adalah $hasil";
            break;

        // jika input user adalah 3, maka pertambahan
        case 3:
            $hasil = $nilaiPertama + $nilaiKedua;
            echo "Hasil $nilaiPertama + $nilaiKedua adalah $hasil";
            break;

        // jika input user adalah 4, maka pengurangan
        case 4:
            $hasil = $nilaiPertama - $nilaiKedua;
            echo "Hasil $nilaiPertama - $nilaiKedua adalah $hasil";
            break;

            // jika inputan user tidak sesuai dengan semua kondisi diatas, maka return error
            default:
            echo "Maaf input yang anda masukkan tidak valid";
    }

    // tanya user apakah ingin melakukan operasi lagi?
    echo "\nLagi?";
    echo "\nInput apa saja jika ingin lagi. Biarkan kosong jika tidak.\n";
    $lagi = trim(fgets(STDIN));

    if ($lagi != null) {
        calculator();
    }    

}

// jalankan function
calculator();


// Erlangga Riansyah, 1TI18
// Dasar-dasar pemrograman, STT Terpadu Nurul Fikri
