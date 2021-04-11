<?php
require_once 'App/init.php';

// $produk1 = new Komik("Jujutsu Kaisen", "Gege Akutami", "Elex", 40000, 200);
// $produk2 = new Game("Little Nighmares", "Trasier Studios", "Bandai Namco", 239000, 100);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();

use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

new ProdukUser();
echo '<br>';
new ServiceUser();