<?php

class Account {
    private $nomor;
    protected $saldo;

    public function __construct($nomor, $saldo) {
        $this->nomor = $nomor;
        $this->saldo = $saldo;
    }

    public function deposit($uang) {
        $this->saldo += $uang;
        echo "\nDeposit berhasil!";
    }

    public function withdraw ($uang) {
        if ($uang > $this->saldo) {
            echo "\nMaaf saldo tidak cukup.";
        } else {
            echo "\nBerikut dana yang dikeluarkan: " . $uang;
            $this->saldo -= $uang;
        }
    }

    public function cetak() {
        echo "\nDana: " . $this->saldo . "\nNomor: " . $this->nomor;
    }
}

class AccountBank extends Account {
    public function __construct($no, $saldo) {
        parent::__construct($no, $saldo);
    }
    
    public function CustomerTransfer(AccountBank $accountTujuan, $saldo) {
        if ($saldo > $this->saldo) {
            echo "\nMaaf saldo tidak mencukupi.";
        } else {
            $accountTujuan->deposit($saldo);
            $this->saldo -= $saldo;

            echo "\nTransfer berhasil";
        }
    }
}

$Ahmad = new AccountBank("C001", 6000000);
$Budi = new AccountBank("C002", 5350000);
$Kurniawan = new AccountBank("C003", 2500000);

$Ahmad->cetak();
$Budi->cetak();
$Kurniawan->cetak();
echo "\n---";
$Ahmad->CustomerTransfer($Kurniawan, 1500000);
$Ahmad->CustomerTransfer($Budi, 500000);
echo "\n---";
$Ahmad->cetak();
$Budi->cetak();
$Kurniawan->cetak();
echo "\n---";
$Budi->withdraw(2500000);
$Budi->cetak();
