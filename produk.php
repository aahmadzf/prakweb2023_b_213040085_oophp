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

// $produk1 = new Produk();
// $produk1->judul = "Nariti";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncut";
// $produk2->tambahProperty = "Property";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Nariti";
$produk3->penulis = "Tadashi Maeda";
$produk3->penerbit = "Sinar Dunia";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncut";
$produk4->penulis = "Neil Amstrong";
$produk4->penerbit = "Sinar Mas";
$produk4->harga = 250000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
