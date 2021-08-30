<?php

class Produk
{
    public $judul = "judul";
    public $penulis = "penulis";
    public $penerbit = "penerbit";
    public $harga  = 0;

    // public function sayHello()
    // {
    //     return "Hello world";
    // }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}
// $produk1 = new Produk();
// $produk1->judul = "naruto";
// var_dump($produk1);

// echo "<br>";

// $produk2 = new Produk();
// $produk2->judul = "kakashi";
// $produk2->tambahProperty = "HAHAHAHA";
// var_dump($produk2);


$produk3 = new Produk();
$produk3->judul = "naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;
// var_dump($produk3);

// echo "komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// echo $produk3->sayHello();
// echo $produk3->getLabel();

// echo "<hr>";
$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
