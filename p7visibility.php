<?php

class Produk {
    public $judul, $penulis, $penerbit;
    protected $diskon;
    private $harga;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
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
    public $jmlHalaman;
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk() {
        $str = "Komik | ". parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman";
        return $str;
    }
}

class Game extends Produk {
    public $waktuMain;
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk() {
        $str = "Game | ". parent::getInfoProduk() ." - {$this->waktuMain} Jam";
        return $str;
    }

    public function getDiskon($diskon) {
        $this->diskon=$diskon;
    }
}

$produk1 = new Komik("Jujutsu Kaisen", "Gege Akutami", "Elex", 40000, 200);
$produk2 = new Game("Little Nighmares", "Trasier Studios", "Bandai Namco", 239000, 100);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";
echo $produk1->getHarga();
echo "<br>";
$produk2->getDiskon(70);
echo $produk2->getHarga();