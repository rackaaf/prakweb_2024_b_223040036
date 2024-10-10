<?php

class Produk
{

    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;


    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 =  new produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 =  new produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "fufufu";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->judul = "Shonen Jump";
$produk3->harga = 30000;


$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->judul = "Sony Computer";
$produk4->harga = 250000;


echo "komik :  " . $produk3->getLabel();
echo "<br>";
echo "game :  " . $produk4->getLabel();
