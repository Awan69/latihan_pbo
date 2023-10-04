<?php

function formatRupiah($number){
    return 'Rp. ' . number_format($number,0,',','.') . ',-';
}

class Employee {
    protected $lama_kerja;
    protected $gaji=3000000 ;

    public function __construct($lama_kerja) {
        $this->lama_kerja = $lama_kerja;
    }

    public function hitung_gaji() {
        return $this->gaji;
    }
}

class Programmer extends Employee {

    public function hitung_gaji() {
        $salary = $this->gaji;

        if($this->lama_kerja >= 1 && $this->lama_kerja <= 10){
            $salary += $this->gaji * 0.01 * $this->lama_kerja;
        } else if ($this->lama_kerja > 10){
            $salary += $this->gaji * 0.02 * $this->lama_kerja;
        }

        return $salary;
    }
}

class Director extends Employee {

    public function hitung_gaji() {
        $salary = $this->gaji + $this->gaji * 0.5 * $this->lama_kerja + $this->gaji * 0.1 * $this->lama_kerja;
        return $salary;
    }
}

class Pegawai_mingguan extends Employee {
    protected $hargaBarangTerjual;
    protected $stokYangHarusTerjual;
    protected $jumlahBarangTerjual;
    protected $gaji = 500000;

    public function __construct($hargaBarangTerjual, $stokYangHarusTerjual, $jumlahBarangTerjual) {
        $this->hargaBarangTerjual = $hargaBarangTerjual;
        $this->stokYangHarusTerjual = $stokYangHarusTerjual;
        $this->jumlahBarangTerjual = $jumlahBarangTerjual;
    }

    public function hitung_gaji() {
        if($this->jumlahBarangTerjual > 0.7 * $this->stokYangHarusTerjual){
            return $this->gaji + $this->hargaBarangTerjual * $this->jumlahBarangTerjual * 0.10;
        } else {
            return $this->gaji + $this->hargaBarangTerjual * $this->jumlahBarangTerjual * 0.03;
        }
    }
}

$programmer = new Programmer(11);
echo "Gaji programmer: " . formatRupiah($programmer->hitung_gaji()) . "<br>";

$director = new Director(1);
echo "Gaji direktur: " . formatRupiah($director->hitung_gaji()) . "<br>";

$PegawaiMingguan = new Pegawai_mingguan(2000, 100, 60);
echo "Gaji pegawai mingguan: " . formatRupiah($PegawaiMingguan->hitung_gaji()) . "<br>";

?>