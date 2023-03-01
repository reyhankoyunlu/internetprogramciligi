<?php
/* 
Uygulama-1
1. Kendi belirleyeceğiniz isimde bir sınıf oluşturunuz.
2. constract metodunda 3 tane değişken alarak bu değişkenleri sınıf içerisindeki değişkenlere atayınız.
3. sınıf içerisine public 2 tane metot yazınız.
4. Birinci metotta  girilen sayının karesi ekrana yazdırılsın.
5. İkinci metotta  girilen sayıya kadar tüm sayıların karesi alt alta ekrana yazdırılsın.
*/

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


/* 
Uygulama-2
1. Kendi belirleyeceğiniz isimde bir sınıf oluşturunuz.
2. Construct metodunda bir karşılama mesajını ekrana yazdırınız.
3. Destruct metodunu yazınız ve çalıştığını gösteren bir metni ekrana yazdırınız.
4. sınıf içerisine public 2 tane metot yazınız.
5. Birinci metoda parametre olarak gönderilen vize ve final notlarını alarak, ortalama hesabı yaptırıp 50'nin üzerindeyse geçtiğini ekrana yazdırınız.
6. İkinci metotda  parametre olarak gelen sayının faktöryel hesabını yaptırarak ekrana sonucunu yazdırınız. 
*/


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
?>