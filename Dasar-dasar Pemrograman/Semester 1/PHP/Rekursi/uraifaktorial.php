<?php 

echo "Masukkan nilai: ";
$param = trim(fgets(STDIN));
$faktor = 1;

$desc = "faktorial(".$param.") = 1*";
for ($i = 1; $i < $param + 1; $i++) {
    if ($i == $param){
        $desc .= $i." = ";
    } else {
        $desc .= $i."*";
    }

    $faktor *= $i;
}

echo $desc;
echo $faktor;
