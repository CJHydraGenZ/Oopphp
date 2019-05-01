<?php  

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
