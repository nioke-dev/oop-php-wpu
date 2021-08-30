<?php

class Produk
{
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;
    public $jmlHalaman;
    public $waktuMain;
    public $tipe;


    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->WaktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap()
    {
        // komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
        // Game : Uncharted | Neil Druckman, Sonu Computer (Rp. 250000) ~ 50 Jam.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if ($this->tipe == "Komik") {
            $str .=   " - {$this->jmlHalaman} Halaman.";
        } else if ($this->tipe == "Game") {
            $str .= " ~ {$this->waktuMain} Jam.";
        }
        return $str;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        if ($produk->satuan == "50 Jam") {
            $str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga}) ~ {$produk->satuan}";
        } else {
            $str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga}) - {$produk->satuan}";
        }
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
die;


echo "komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

// komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
// Game : Uncharted | Neil Druckman, Sonu Computer (Rp. 250000) ~ 50 Jam.

echo "Komik : " . $infoProduk1->cetak($produk1);
echo "<br>";
echo "Game : " . $infoProduk1->cetak($produk2);
