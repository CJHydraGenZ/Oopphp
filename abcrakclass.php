<?php



abstract class Produk
{
    private $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga,
        $diskon = 0;





    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul)
    {
        // harus string
        // if (!is_string($judul)) {
        //     throw new Exception("Harus string");
        // }
        $this->judul = $judul;
    }
    public function getJudul()
    {
        return $this->judul;
    }


    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }
    public function getPenulis()
    {
        return $this->penulis;
    }


    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }


    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getDiskon()
    {
        return $this->diskon;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }


    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon
            / 100);
    }

    public function  getLabel()
    {
        return "$this->penulis,$this->penerbit";
    }


    abstract public function getINfoproduk();

    public function getInfo()
    {
        // komik : Naruto | Massashi< Shonen jum (Rp.30000) - 100 Halaman
        $str = "{$this->judul}:{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";



        return $str;
    }
}

class Komik extends Produk
{
    public  $jumlHal;
    public function __construct($judul, $penulis, $penerbit, $harga, $jumlHal)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jumlHal = $jumlHal;
    }





    public function getINfoproduk()
    {
        $str = "Komik: " . $this->getInfo() . " - {$this->jumlHal} Halaman.";
        return $str;
    }
}


class Game extends Produk
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
}
// class ini untuk mencetak info lengkap
class CetakInfoProduk
{
    public $daftarProduk = [];

    public function tambahproduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    public function cetak()
    {
        $str = "Daftar Produk : <br>";


        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getINfoproduk()} <br>";
        }

        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi", "Shonen jump", 30000, 100);

$produk2 = new Game("The witcher", "Cahya", "GameEngine", 150000,  500);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahproduk($produk1);
$cetakProduk->tambahproduk($produk2);

echo $cetakProduk->cetak();
