<?php
class Toko {
    var $besarPinjaman = 1000000;
    var $besarBunga = 10;
    var $lamaAngsuran = 5;

    function hitungPembayaran() {
        $bunga = ($this->besarBunga / 100) * $this->besarPinjaman;
        $totalUtang = $this->besarPinjaman + $bunga;
        $bungaBulan = $totalUtang / $this->lamaAngsuran;

        echo "Besaran Pinjaman : Rp. " . number_format($this->besarPinjaman) . "<br>";
        echo "Masukkan besar Bunga (%) : " . $this->besarBunga . "<br>";
        echo "Total Pinjaman : Rp. " . number_format($totalUtang) . "<br>";
        echo "Lama Angsuran (bulan) : " . $this->lamaAngsuran . "<br>";
        echo "Besaran Angsuran : Rp. " . number_format($bungaBulan) . "<br>";
    }
}


$objekToko = new Toko();
$objekToko->hitungPembayaran();
?>
