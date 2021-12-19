<?php 

echo "Masukkan nilai: ";
$param = trim(fgets(STDIN));
$faktor = 1;

for ($i = 1; $i < $param + 1; $i++) {
    $faktor *= $i;
}

echo $faktor;
