<?php 
class aritmatika {
    protected $angka1, $angka2;
    
    public function tambah($angka1, $angka2) {
        $this->angka1 = $angka1;
        $this->angka2 = $angka2;
        $hasil = $angka1 + $angka2;
        return $hasil;
    }
    public function kurang($angka1, $angka2) {
        $this->angka1 = $angka1;
        $this->angka2 = $angka2;
        $hasil = $angka1 - $angka2;
        return $hasil;
    }
    public function bagi($angka1, $angka2) {
        $this->angka1 = $angka1;
        $this->angka2 = $angka2;
        $hasil = $angka1 / $angka2;
        return $hasil;
    }
    public function kali($angka1, $angka2) {
        $this->angka1 = $angka1;
        $this->angka2 = $angka2;
        $hasil = $angka1 * $angka2;
        return $hasil;
    }
    public function modulus($angka1, $angka2) {
        $this->angka1 = $angka1;
        $this->angka2 = $angka2;
        $hasil = $angka1 % $angka2;
        return $hasil;
    }   
}

$aritmatika = new aritmatika();
echo $aritmatika->tambah(11 , 8);
?>