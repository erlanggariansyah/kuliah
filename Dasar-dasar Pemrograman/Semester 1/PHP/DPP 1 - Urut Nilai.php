<?php

// buat function baru, agar nantinya bisa dipanggil kembali
function urutNilai () {

    // ambil input user
    echo "Input bilangan\n";
    $input = trim(fgets(STDIN));

    // variabel yang menampung nilai input user kedalam array
    $data = [];

    // baca bilangan pertama, masukkan kedalam array data
    $data[0] = (integer) substr($input, 0, 1);

    // baca bilangan kedua, masukkan kedalam array data
    $data[1] = (integer) substr($input, 1, 1);

    // baca bilangan ketiga, masukkan kedalam array data
    $data[2] = (integer) substr($input, 2);

    // jika nilai A lebih dari B, maka ubah nilai A ke B, vice versa
    if ($data[0] > $data[1]) {
        $temp = $data[0];
        $data[0] = $data[1];
        $data[1] = $temp;
    }

    // karena pengecekan hanya dilakukan untuk nilai A > B, maka jika A < B nilainya tidak akan diubah

    // jika nilai B lebih dari C, maka ubah nilai B ke C, vice versa
    if ($data[1] > $data[2]) {
        $temp = $data[1];
        $data[1] = $data[2];
        $data[2] = $temp;
    }

    // karena pengecekan hanya dilakukan untuk nilai B > C, maka jika B < C nilainya tidak akan diubah

    // karena terdapat kemungkinan nilai B berubah di tahap sebelumnya, maka lakukan pengecekan lagi untuk nilai A dan B
    // jika nilai A lebih dari B, maka ubah nilai A ke B, vice versa 
    if ($data[0] > $data[1]) {
        $temp = $data[0];
        $data[0] = $data[1];
        $data[1] = $temp;
    }

    // buat variabel baru yang menampung nilai dari array data
    $hasil = $data[0].$data[1].$data[2];

    // tampilkan hasil
    echo $hasil;

    // tanya user apakah ingin menjalankan program lagi?
    echo "\nLagi? \n";
    echo "Ketik 'y' jika iya, ketik apa saja jika tidak.\n";
    $input = trim(fgets(STDIN));

    // cek input dari user
    if ($input == 'y') {
        // jika iya, maka jalankan function lagi
        urutNilai();
    }

}

// jalankan function
urutNilai();

// Erlangga Riansyah, 1TI18
// Dasar-dasar pemrograman, STT Terpadu Nurul Fikri
