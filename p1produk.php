<?php

class Produk {
    public  $judul = "Judul",
            $penulis = "Penulis",
            $penerbit = "Penerbit",
            $harga = 0;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}

// $produk1 = new Produk();
// $produk1->judul  = "Jujutsu Kaisen";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Genshin Impact";
// $produk2->add = "Keqing Wangi HUHAHUHAHUA";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Jujutsu Kaisen";
$produk3->penulis = "Gege Akutami";
$produk3->penerbit = "Elex";
$produk3->harga = 40000;

$produk4 = new Produk();
$produk4->judul = "Genshin Impact";
$produk4->penulis = "Mihoyo";
$produk4->penerbit = "Mihoyo";
$produk4->harga = 0;

echo "Komik : ". $produk3->getLabel();
echo "<br>Game : ". $produk4->getLabel();