<?php



class Produk
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0,
        $jumlHal = 0,
        $JamMA = 0,
        $type;

    public function __construct($judul, $penulis, $penerbit, $harga, $jumlHal, $JamMA, $type)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumlHal = $jumlHal;
        $this->JamMA = $JamMA;
        $this->type = $type;
    }

    public function  getLabel()
    {
        return "$this->penulis,$this->penerbit";
    }
    public function getINfolengkap()
    {
        // komik : Naruto | Massashi< Shonen jum (Rp.30000) - 100 Halaman

        $str = "{$this->type}:{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";


        if ($this->type == "Komik") {
            $str .= " - {$this->jumlHal} Halaman.";
        } else if ($this->type == "game") {
            $str .= " ~ {$this->JamMA}  jam.";
        }
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

$produk1 = new Produk("Naruto", "Masashi", "Shonen jump", 30000, 100, 0, "Komik");

$produk2 = new Produk("The witcher", "Cahya", "GameEngine", 150000, 0, 500, "game");


echo $produk1->getINfolengkap();
echo "<br>";
echo $produk2->getINfolengkap();
