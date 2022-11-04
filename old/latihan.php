<?php

class Persegi{
    public $sisi;
    
    public function setSisi($sisi){
        $this->sisi = $sisi;
    }
    
    public function hitungLuas(){
        return $this->sisi * $this->sisi;
    }
    
    public function hitungKeliling(){
        return 4 * $this->sisi;
    }
}


$persegi = new Persegi;
$persegi->setSisi(4);
echo "sisi = " . $persegi->sisi . "<br />";
echo "luas = " . $persegi->hitungLuas() . "<br />";
echo "keliling = " . $persegi->hitungKeliling() . "<br />";