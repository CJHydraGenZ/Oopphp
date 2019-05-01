<?php  

class Game extends Produk implements InfoProduk
{
    public $JamMA;
    public function __construct($judul, $penulis, $penerbit, $harga, $JamMA)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->JamMA = $JamMA;
    }
    public function getINfoproduk()
    {
        $str = "Game: " . $this->getInfo() . " ~ {$this->JamMA} Jam.";
        return $str;
    }
    public function getInfo()
    {
        // komik : Naruto | Massashi< Shonen jum (Rp.30000) - 100 Halaman
        $str = "{$this->judul}:{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";



        return $str;
    }
}
