<?php
interface Buah
{
    public function makan();
    public function setwarna($warna);
}
interface Benda
{
    public function setUkuran($ukuran);
}

class Apel implements Buah, Benda
{
    protected $warna;
    protected $ukuran;
    public function makan()
    {
        // kunyah
        // sampai bagian tengah
    }
    public function setwarna($warna)
    {
        $this->warna = $warna;
    }
    public function setUkuran($ukuran)
    {
        $this->ukuran = $ukuran;
    }
}
class jeruk implements Buah
{
    protected $warna;
    public function makan()
    {
        // kupas
        // kunyah        
    }
    public function setwarna($warna)
    {
        $this->warna = $warna;
    }
}
