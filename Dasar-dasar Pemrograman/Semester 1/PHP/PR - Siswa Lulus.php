<?php 

class Murid {
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

$reza = new Murid('reza', 70);
$ciut = new Murid('ciut', 63);
$dian = new Murid('dian', 80);
$badu = new Murid('badu', 40);

$hasil_akhir = [$reza, $ciut, $dian, $badu];

function lulusAja($param) {
    foreach ($param as $p) {
        if ($p->getNilai() > 65) {
            echo $p->getNama()." ";
        }
    }
}

lulusAja($hasil_akhir);
