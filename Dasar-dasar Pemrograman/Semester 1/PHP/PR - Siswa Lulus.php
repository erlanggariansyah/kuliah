<?php 

class murid {
    private $nama;
    private $nilai;

    public function __construct($setNama, $setNilai) {
        $this->nama = $setNama;
        $this->nilai = $setNilai;
    }

    public function setNama($param) {
        $this->nama = $param;
    }

    public function setNilai($param) {
        $this->nilai = $param;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getNilai() {
        return $this->nilai;
    }
}

class Reza extends murid {
}
$reza = new Reza('reza', 70);

class Ciut extends murid {
}
$ciut = new Ciut('ciut', 63);

class Dian extends murid {
}
$dian = new Dian('dian', 80);

class Badu extends murid {
}
$badu = new Badu('badu', 40);

$hasil_akhir = [$reza, $ciut, $dian, $badu];

function lulusAja($param) {
    foreach ($param as $p) {
        if ($p->getNilai() > 65) {
            echo $p->getNama()." ";
        }
    }
}

lulusAja($hasil_akhir);
