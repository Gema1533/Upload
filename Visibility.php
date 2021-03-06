<?php
class produk{
  public $namaBarang, 
         $merk, 
         $harga;

  public function getCetak(){
    return "$this->namaBarang $this->merk  (Rp $this->harga)";
  }
  public function __construct($namaBarang="nama barang", $merk="merk", $harga=0, $ukuranLayar="ukuran layar", $kapasitas="kapasitas"){
    $this->namaBarang = $namaBarang;
    $this->merk=$merk;
    $this->harga=$harga;
    $this->ukuranLayar=$ukuranLayar;
    $this->kapasitas=$kapasitas;
  }

    public function cetakInfo(){
        $str="{$this->namaBarang}, {$this->getCetak()}";
        return $str;
    }
}

class laptop extends produk{
    public $ukuranLayar;
    public function __construct($namaBarang, $merk, $harga, $ukuranLayar){
        parent::__construct($namaBarang, $merk, $harga);
        $this->ukuranLayar=$ukuranLayar;
    }
    public function cetakInfo(){
        $str="Laptop: ".parent::getCetak()." | Ukuran Layar: {$this->ukuranLayar}";
        return $str;
    }
}

class flashdisk extends produk{
    public $kapasitas;
    public function __construct($namaBarang, $merk, $harga, $kapasitas){
        parent::__construct($namaBarang, $merk, $harga);
        $this->kapasitas=$kapasitas;
    }
    public function cetakInfo(){
        $str="Aksesoris:  ".parent::getCetak()." | Kapasitas: {$this->kapasitas}";
        return $str;
    }
}

$produk1 = new laptop("Idepad 310","Lenovo",7000000,"14 inci");
$produk2 = new flashdisk("Flasdisk","Sandisk",100000,"8 Gb");


echo $produk1->cetakInfo();
echo "<br>";
echo $produk2->cetakInfo();
echo "<br>"
;
?>