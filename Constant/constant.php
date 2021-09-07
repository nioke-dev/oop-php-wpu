<?php
// define('NAMA', 'Sandhika Galih');
// isi dari parameternya adalah name dan value name itu nama konstantanya sedangkan value isinya mau diberi nilai apa
// biasakan ketika menuliskan sebuah nama konstanta usahakan besar semua supaya nanti membedakan mana konstanta dan mana variable


// echo NAMA;
// echo "<br>";
// const UMUR = 32;
// echo UMUR;

// Menggunakan define() ini tidak bisa disimpan kedalam sebuah class jadi define ini harus disimpan diluar sebagai constanta global
// sedangkan const ini masih bisa dimasukkan kedalam class sehingga bisa kita gunakan didalam konsep oop


// class Coba
// {
//     const NAMA = 'Sandhika';
// }

// echo Coba::NAMA;
// function Coba()
// {
//     return __FUNCTION__;
// }

// echo Coba();




class Cobaa
{
    public $kelas = __CLASS__;
}

$obj = new Cobaa();
echo $obj->kelas;
