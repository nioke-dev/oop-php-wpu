<?php
class Komik extends Produk implements InfoProduk
{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmllHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmllHalaman;
    }

    public function getInfo()
    {
        // komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
        // Game : Uncharted | Neil Druckman, Sonu Computer (Rp. 250000) ~ 50 Jam.
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
        // $this itu artinya instance class yang bersangkutan
        // parent:: karena dia bukan variable kita gak bisa masukin ke kurung kurawal
        // mau gak mau kita harus concat
    }
}
