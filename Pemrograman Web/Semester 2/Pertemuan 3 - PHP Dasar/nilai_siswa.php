<?php

require_once 'libfungsi.php';

$nilai = 70;

$hasil = kelulusan($nilai);
$hasildua = grade($nilai);
$predikat = predikat('A');

echo 'DINYATAKAN ' . $hasil;
