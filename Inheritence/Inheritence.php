<?php

class Produk
{
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;
    public $jmlHalaman;
    public $waktuMain;


    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        // komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
        // Game : Uncharted | Neil Druckman, Sonu Computer (Rp. 250000) ~ 50 Jam.
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

class Komik extends Produk
{
    public function getInfoProduk()
    {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public function getInfoProduk()
    {
        // $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
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



$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
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
