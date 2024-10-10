<?php

class Produk
{

    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jumlahHalaman,
        $waktuMain,
        $tipe;

    public function __construct($judul = "judul", $penulis  = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0, $waktuMain = 0, $tipe = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumlahHalaman = $jumlahHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }


    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap()
    {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        if ($this->tipe == "komik") {
            $str .= " - {$this->jumlahHalaman} Halaman.";
        } elseif ($this->tipe == "game") {
            $str .= " ~ {$this->waktuMain} Jam.";
        }

        return $str;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    }
}



$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "komik");
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
