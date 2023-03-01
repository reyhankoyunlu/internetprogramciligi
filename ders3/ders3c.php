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

//PRIVATE

use kutuphane as GlobalKutuphane;

class kutuphane{
    private $libraryname="Adü Kütüphane"; //dışarıdan erişilemez
    private const YEAR=1980; //dışarıdan erişilemez

    private function getInfo()//dışarıdan erişilemez
    {
        $text = "Kütüphane hergün saat 08:00 - 18:00 arasında hizmet vermektedir";
        return $text;
    } 

    //Fonksiyon ile private bir özellik değiştirilebilir
    public function kutuphaneninadinidegistir($kutuphaneadi)
    {
        $this->libraryname=$kutuphaneadi;
    }

    //Fonksiyon ile private bir özellik dışarıya gönderildi
    public function kutuphaneadinigetir()
    {
        return $this->libraryname;
    }

    //Fonksiyon ile private bir özellik dışarıya gönderildi
    public function yilgoster()
    {
        return self::YEAR;
    }

    //Fonksiyon ile private bir özellik dışarıya gönderildi
    public function bilgigoster()
    {
        return $this->getInfo();
    }

}

$nesne=new Kutuphane;

//class içindeki private değişken ve fonksiyonlara erişmek
echo $nesne->kutuphaneadinigetir();
echo "<br>";
echo $nesne->yilgoster();
echo "<br>";
echo $nesne->bilgigoster();


//private olan kütüphane isminin public bir fonksiyon yardımıyla değiştirilmesi
echo $nesne->kutuphaneninadinidegistir("Adana Kütüphanesi");
echo "<br>";
echo $nesne->kutuphaneadinigetir();//kütüphanenin değiştirilen ismi gelecektir


echo "<br>";
echo "Kütüphanenin Adı: $nesne->libraryname"; //private olduğu için hata verir
echo "<br>";
echo "Kütüphanenin Kuruluş Yılı: " . $nesne::YEAR; //private olduğu için hata verir
echo "<br>";
echo $nesne->getInfo(); //private olduğu için hata verir

?>


</body>
</html>