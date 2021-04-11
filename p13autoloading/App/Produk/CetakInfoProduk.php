<?php
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