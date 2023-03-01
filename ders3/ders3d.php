<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

/*  
    Access Modifier (Erişim Belirleyiciler)

    Public      : Genel heryerden erişime açık olduğunu ifade eder.
    Private     : Özel, yanlızca sınıf içerisinden erişilebilir.
    Protected   : Korumalı, sınıf içerisinden ve türetilen sınıflardan erişilebilir. 

    static      : Sabit Sınıf içerisindeki herhangi bir özellik veya metoda sınıf çağırılmadan erişilebilir.

    $this       :  Bu sınıfta şeklinde sınıfı işaret etmek için kullanılır.
    self::      :  Kendi sınıfımda, şeklinde sınıfı işaret etmek için kullanılır.
    parent::    :  Ebeveyn sınıfımda, şeklinde sınıfı işaret etmek için kullanılır.

*/

// PROTECTED

use kutuphane as GlobalKutuphane;

class kutuphane{
    protected $libraryname="adü kütüphane"; //dışarıdan erişilemez
    protected const YEAR=1980; //dışarıdan erişilemez

    protected function getInfo() //dışarıdan erişilemez
    {
        $text="Kütüphane hergün saat 08:00 - 18:00 arasında hizmet vermektedir";
        return $text;
    }

    // fonksiyon ile protected özellik değiştirilebilir
    public function kutuphaneninadinidegistir($kutuphaneadi){
        $this->libraryname=$kutuphaneadi;
    }

    //fonksiyon ile protected bir özellik dışarıya gönderildi
    public function kutuphaneninadinigetir(){
        return $this->libraryname;
    }
    
     //fonksiyon ile protected bir özellik dışarıya gönderildi
    public function yilgoster(){
        return self::YEAR;
    }

     //fonksiyon ile protected bir özellik dışarıya gönderildi
    public function bilgigoster(){
        return $this->getInfo();
    }

}

$nesne=new Kutuphane;

//class içindeki protected değişken ve fonksiyonlara erişmek
echo $nesne->kutuphaneadinigetir();
echo "<br>";
echo $nesne->yilgoster();
echo "<br>";
echo $nesne->bilgigoster();

//protected olan kütüphane isminin public bir fonksiyon ile değiştirilmesi
echo $nesne->kutuphaneninadinidegistir("izmir kütüphanesi");
echo "<br>";
echo $nesne->kutuphaneadinigetir(); //değiştirilen isim gelecek

echo "<br>";
echo "kütüphanenin adı : $nesne-libraryname"; //protected olduğu için hata verir
echo "<br>";
echo "kütüphanenin kuruluş yılı : .$nesne::YEAR"; //protected olduğu için hata verir
echo "<br>";
echo $nesne->getInfo(); //protected olduğu için hata verir


?>


</body>
</html>