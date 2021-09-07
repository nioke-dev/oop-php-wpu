<?php

// class ContohStatic
// {
//     public static $angka = 1;

//     public static function halo()
//     {
//         return "Halo" . self::$angka++ . " Kali.";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();


class Contoh
{
    public static $angka = 1;

    public function Halo()
    {
        return "Halo " . self::$angka++ . " Kali.";
    }
}

$obj = new Contoh;
echo $obj->Halo();
echo $obj->Halo();
echo $obj->Halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->Halo();
echo $obj2->Halo();
echo $obj2->Halo();