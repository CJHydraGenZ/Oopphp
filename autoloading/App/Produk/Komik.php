<?php  
class Komik extends Produk implements InfoProduk
{
    public  $jumlHal;
    public function __construct($judul, $penulis, $penerbit, $harga, $jumlHal)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jumlHal = $jumlHal;
    }



    public function getInfo()
    {
        // komik : Naruto | Massashi< Shonen jum (Rp.30000) - 100 Halaman
        $str = "{$this->judul}:{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";



        return $str;
    }

    public function getINfoproduk()
    {
        $str = "Komik: " . $this->getInfo() . " - {$this->jumlHal} Halaman.";
        return $str;
    }
}
