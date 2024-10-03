<?php
class PersegiPanjang
{
    public $panjang;
    public $lebar;

    // Konstruktor untuk menginisialisasi nilai panjang dan lebar saat objek dibuat untuk dinput
    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    // Metode mutator (setter) untuk mengubah nilai panjang yg telah diberi nilai
    public function setPanjang($panjang)
    {
        $this->panjang = $panjang;
    }
    
    // Metode mutator (setter) untuk mengubah nilai lebar 
    public function setLebar($lebar)
    {
        $this->lebar = $lebar;
    }

    // Metode asesor (getter) untuk mendapatkan nilai panjang
    public function getPanjang()
    {
        return $this->panjang;
    }

    // Metode asesor (getter) untuk mendapatkan nilai lebar
    public function getLebar()
    {
        return $this->lebar;
    }

    // Metode untuk menghitung luas persegi panjang
    public function hitungLuas()
    {
         return $this->panjang * $this->lebar;
    }

    // Metode untuk menghitung keliling persegi panjang
    public function hitungKeliling()
    {
      return 2 * ($this->panjang + $this->lebar);
    } }