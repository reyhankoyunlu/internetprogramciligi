<?php
class program
{

    
    public function __construct($hostname = "localhost", $username, $pass, $dbName)
    {
        $connection = "$hostname, $username, $pass, $dbName";
        return $connection;
    }


    public $ad = "reyhan";
    public $soyad = "koyunlu";

    
    public function kare()
    {
        function karesi($sayi)
        {
        return $sayi*$sayi;
        }
        $sonuc="8 Sayısının Karesi:".karesi(8);
        echo "<br>";
        echo $sonuc;
        
    }

    public function toplam($input){
        for ($i=0; $i < $input; $i++) { 
            echo $i*$i;
        }
    }
     
    
}
echo "<br>";

$nesne = new program("reyhankoyunlu", "reyhan", "456825", "reyhann");


echo "<br>";

print_r($nesne);

echo $nesne->kare();
echo "<br>";
$nesne->toplam(8);
echo "<br>";
echo "<br>";

// -------------------------------------------------------------------------------------------------------


use hesapla as reyhan;

    class hesapla{
        
        public function __construct(){
            $mesaj="construct";
            echo $mesaj;
            echo"<br>";
        }

        public function __destruct()
        {
            echo "destruct";
            echo"<br>";
        }

        public function sinav($vize,$final){
            
            $not=$vize*0.3 + $final*0.7;
            if ($not>=50) {
                echo "Geçtiniz: " . $not; 
                echo"<br>";
            }
            else{
                echo "Kaldınız";
                echo"<br>";
            }
        }

        public function faktoriyel($sayi){
            $toplam=1;
           for ($i=1; $i <= $sayi; $i++) { 
            $total=$i*$toplam;
           }
           echo "$sayi'nin faktöryeli ".$total;
           echo "<br>";
        }
    }

    $sinif = new hesapla();
    $sinif->sinav(60,45);
    $sinif->faktoriyel(8);