<?php

class Produk {
    public $judul, $penulis, $penerbit, $harga;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}

$produk1 = new Produk("Jujutsu Kaisen", "Gege Akutami", "Elex", 40000);
$produk2 = new Produk("Genshin Impact", "Mihoyo", "Mihoyo", 0);
$produk3 = new Produk("Ganyu Wangy Sekaly", "GWS");

echo "Komik : ". $produk1->getLabel();
echo "<br>Game : ". $produk2->getLabel();

var_dump($produk3);