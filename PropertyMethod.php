<?php

/**
 * 
 */
class Produk
{
	public $nama_barang = "Laptop",
			$merk = "Lenovo",
			$harga = 1500000;
	
	/*public function sayHallo(){
		return "Hallo RPL";}
		*/

	public function getcetak(){
		return "$this->nama_barang,$this->merk,$this->harga";
		}
	}


	/* 		PROPERTY 
	$produk1 = new Produk();
	$produk1 ->nama_barang = "flashdisk";
	var_dump($produk1);

	echo "<br>";
	*/
	
	$produk2 = new Produk();
	$produk2->nama_barang = "mouse";
	$produk2->property_baru = "biru";
	echo "Produk 1 : " . $produk2->getcetak();
	
	echo "<br>";
	$produk3 = new Produk();
	$produk3->nama_barang = "flashdisk";
	$produk3->merk = "Sandisk";
	$produk3->harga = 10000;
	echo "produk 2 : " . $produk3->getcetak();

  ?>