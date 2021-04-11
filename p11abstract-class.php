<?php

abstract class Produk {
    private $judul, $penulis, $penerbit, $harga;
    protected $diskon;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function setJudul($judul) {
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenerbit($penerbit) {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
    
    abstract public function getInfoProduk();

    public function getInfo() {
        $str = "{$this->judul} {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

class CetakInfoProduk {
    public $daftarproduk = [];

    public function tambahProduk(Produk $produk) {
        $this->daftarproduk[] = $produk;
    }

    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";
        foreach ($this->daftarproduk as $p) {
            $str .= "-{$p->getInfoProduk()}<br>";
        }
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
        $str = "Komik | ". $this->getInfo() ." - {$this->jmlHalaman} Halaman";
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
        $str = "Game | ". $this->getInfo() ." - {$this->waktuMain} Jam";
        return $str;
    }

    public function setDiskon($diskon) {
        $this->diskon=$diskon;
    }
}

$produk1 = new Komik("Jujutsu Kaisen", "Gege Akutami", "Elex", 40000, 200);
$produk2 = new Game("Little Nighmares", "Trasier Studios", "Bandai Namco", 239000, 100);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();