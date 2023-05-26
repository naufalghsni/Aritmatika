<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML-PHP</title>
</head>
<body>
    <form action="#" method="post">
        <input type="number" name="angka1" id="1">
        <input type="number" name="angka2" id="2">
    <input type="submit" name="kirim" value="operasikan">
    </form>
    <?php
class aritmatika{
    private $angka1;
    protected $angka2;

    public function __construct($angka1,$angka2){
        $this->angka1 =$angka1;
        $this->angka2 =$angka2;
    }
    
    
    public function tambah(){
     
    
    
    return $this->angka1 +$this->angka2;
    
    }
    
    public function kurang(){
    
    
    return $this->angka1 - $this->angka2;
    }
    
    public function kali(){
       
    
    
    return $this->angka1 * $this->angka2;
    }
    public function bagi(){
      
    
    return $this->angka1 / $this->angka2;
    
    }
    
    public function modulus(){
      
    
    return $this->angka1 % $this->angka2;
    }
    
    
    }
    class kalkulator extends aritmatika{
        public function hasil(){
            echo "data punjumlahan : ". $this->tambah(). "<br>";
            echo "data pengurangan : ". $this->kurang(). "<br>";
            echo "data perkalian : ". $this->kali(). "<br>";
            echo "data pembagian : ". $this->bagi(). "<br>";
            echo "data modulus: ". $this->modulus(). "<br>";
        }
    }



    if(isset($_POST['kirim'])){
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
         $hitung = new kalkulator($angka1,$angka2);
         $hitung->hasil();
       
       
    }
    
    
    
    ?>
</body>
</html>