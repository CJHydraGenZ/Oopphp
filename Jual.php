<?php


class Makanan
{

    public $Ikan = "Vari Bakar",
        $ayam = "Betutu bali",
        $sapi = "Sate",
        $kambing = "Sop Kambing Aceh",
        $harga = "10000";
}

$Makanan1 = new Makanan();
$Makanan1->Vari_Bakar = "makanan lezat";
var_dump($Makanan1->Vari_Bakar);

