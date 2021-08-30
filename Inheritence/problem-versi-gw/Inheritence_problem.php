<?php

class Produk
{
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;
    public $satuan;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $satuan = "satuan")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->satuan = $satuan;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
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

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, "100 Halaman");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, "50 Jam");



echo "komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);

// komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
// Game : Uncharted | Neil Druckman, Sonu Computer (Rp. 250000) ~ 50 Jam.

echo "Komik : " . $infoProduk1->cetak($produk1);
echo "<br>";
echo "Game : " . $infoProduk1->cetak($produk2);
