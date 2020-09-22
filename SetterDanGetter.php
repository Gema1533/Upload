<?php
// Your code here!
class Person{
    //property
    private $nama, $usia, $pekerjaan, $alamat;
    //method setter
    public function setnama($a)
    {
        $this->nama =$a;
    }
    public function setusia($a)
    {
        $this->usia =$a;
    }
    public function setpekerjaan($a)
    {
        $this->pekerjaan =$a;
    }
    public function setalamat($a)
    {
        $this->alamat=$a;
    }
    //method getter
    public function getnama()
    {
        return $this->nama;
        
    }
    public function getusia()
    {
        return $this->usia;
    }
    public function getpekerjaan()
    {
        return $this->pekerjaan;
    }
    public function getalamat()
    {
        return $thie->alamat;
    }
} 
$person = new Person;
$person->setnama("Gema");
echo "Nama Saya : ".$person->getnama();
    
?>
