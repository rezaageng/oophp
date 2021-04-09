<?php

class Produk {
    public $judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe=$tipe;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
    
    public function getInfoLengkap(){
        $str = "{$this->tipe} | {$this->judul} {$this->getLabel()} (Rp. {$this->harga})";
        if ($this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman";
        }
        elseif ($this->tipr="Game") {
            $str .= " ~ {$this->waktuMain} Jam";
        }
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }    
}

$produk1 = new Produk("Jujutsu Kaisen", "Gege Akutami", "Elex", 40000, 200, 0, "Komik");
$produk2 = new Produk("Genshin Impact", "Mihoyo", "Mihoyo", 0, 0, 100, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();