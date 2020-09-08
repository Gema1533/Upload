<? php
class Mobil{
public $nama, $merk, $warna, $KecepatanMaksimal, $JumlahPenumpang;

public function TambahKecepatan() {
return"kecepatan bertanbah";}
} 

class MobilSport extends Mobil{
	public $turbo = false;
	public function AktifkanTurbo() {
return "Turbo diaktifkan" ;}
} 
$MobilKu = new MobilSport() ;
echo $MobilKu->TambahKecepatan() ;
echo "<br>" ;
echo $MobilKu->AktifkanTurbo () ;
? >