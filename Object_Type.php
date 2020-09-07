<?php
class produk{
public $namaBarang,
   $merk,
   $harga;

public function getCetak(){
return "$this->namaBarang, $this->merk, $this->harga";
}
public function __construct($namaBarang="nama barang", $merk="merk",$harga=0){
$this->namaBarang = $namaBarang;
$this->merk=$merk;
$this->harga=$harga;
    }

}
class cetakinfoproduk {
public function cetakinfo(produk $produk){
$str="{$produk->namaBarang}, {$produk->getCetak()}";
return $str;
}
}

$produk1 = new produk("ideped 310","Lenovo",8000000);
$produk2 = new produk("Flasdisk","Sandisk",500000);
$produk3 = new produk("Macbook Air","Apple",70000000);
$produk4 = new produk("Mouse","Logitech",6000000);
$infoproduk = new cetakinfoproduk(); 


echo "Nama Barang Laptop: " . $produk1->getCetak();
echo "<br>";
echo "Nama Barang Aksesoris: " . $produk2->getCetak();
echo "<br>";
echo "Nama Barang Laptop: " . $produk3->getCetak();
echo "<br>";
echo "Nama Barang Aksesoris: " . $produk4->getCetak();
echo "<br>";
echo $infoproduk->cetakinfo($produk3); 
?>