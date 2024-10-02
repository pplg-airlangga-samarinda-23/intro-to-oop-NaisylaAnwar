<?php
class PersegiPanjang
{
    public $panjang;
    public $lebar;
    // deklarasikan panjang dan lebar
    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    // deklarasikan metode konstruktor

    public function setPanjang($panjang)
    {
        $this->panjang = $panjang;
    }
    // deklarasikan metode mutator dan asesor
    {
        $this->lebar = $lebar;
    }
    public function hitungLuas()
    {
        return $this->panjang * $this->lebar;
        // lengkapi kode untuk menghitung luas persegi panjang

    }

    public function hitungKeliling()
    {
        return 2 * ($this->panjang + $this->lebar);
        // lengkapi dengan kode untuk menghitung keliling persegi panjang

    }
}

$contoh = new PersegiPanjang(12, 20);
echo "Luas Persegi Panjang: " . $contoh->hitungLuas() . "<br>";
echo "Keliling Persegi Panjang: " . $contoh->hitungKeliling() . "<br>";

?>
