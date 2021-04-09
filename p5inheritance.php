<?php

class Produk {
    public $judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
    
    public function getInfoProduk() {
        $str = "{$this->judul} {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }    
}

class Komik extends Produk {
    public function getInfoKomik() {
        $str = "Komik | {$this->judul} {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman}";
        return $str;
    }
}

class Game extends Produk {
    public function getInfoGame() {
        $str = "Game | {$this->judul} {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain}";
        return $str;
    }
}

$produk1 = new Komik("Jujutsu Kaisen", "Gege Akutami", "Elex", 40000, 200, 0);
$produk2 = new Game("Genshin Impact", "Mihoyo", "Mihoyo", 0, 0, 100);

echo $produk1->getInfoKomik();
echo "<br>";
echo $produk2->getInfoGame();