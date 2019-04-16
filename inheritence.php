<?php



class Produk
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0,
        $jumlHal = 0,
        $JamMA = 0;

    public function __construct($judul, $penulis, $penerbit, $harga, $jumlHal, $JamMA)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumlHal = $jumlHal;
        $this->JamMA = $JamMA;
    }

    public function  getLabel()
    {
        return "$this->penulis,$this->penerbit";
    }
    public function getINfoproduk()
    {
        // komik : Naruto | Massashi< Shonen jum (Rp.30000) - 100 Halaman

        $str = "{$this->type}:{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";



        return $str;
    }
}

class Komik extends Produk
{
    public function getINfoproduk()
    {
        $str = "Komik: " . parent::getINfoproduk() . " - {$this->jumlHal} Halaman.";
        return $str;
    }
}
class Game extends Produk
{
    public function getINfoproduk()
    {
        $str = "Game:{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->JamMA} Jam.";
        return $str;
    }
}
// class ini untuk mencetak info lengkap
class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul}| {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi", "Shonen jump", 30000, 100, 0);

$produk2 = new Game("The witcher", "Cahya", "GameEngine", 150000, 0, 500);


echo $produk1->getINfoproduk();
echo "<br>";
echo $produk2->getINfoproduk();
