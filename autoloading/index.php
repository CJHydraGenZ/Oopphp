<?php

require_once 'App/init.php';


$produk1 = new Komik("Naruto", "Masashi", "Shonen jump", 30000, 100);

$produk2 = new Game("The witcher", "Cahya", "GameEngine", 150000,  500);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahproduk($produk1);
$cetakProduk->tambahproduk($produk2);

echo $cetakProduk->cetak();
