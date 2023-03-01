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

Access Modifier(Erişim Belirleyiciler)

    Public : Genel, her yerden erişime açık olduğunu ifade eder.
    Private :Özel, yalnızca sınıf içerisinden erişilebilir.
    Protected : Korumalı, sınıf içerisinden ve türetilen sınıflardan erişilebilir.

    Static : Sabit, sınıf içerisindeki herhangi bir özellik veya metoda sınıf çağırılmadan erişilebilir.

    $this : Bu sınıfta şeklinde sınıfı işaret etmek için kullanılır.
    self:: : Kendi sınıfımda şeklinde sınıfı işaret etmek için kullanılır.
    parent:: : Ebeveyn sınıfımda şeklinde sınıfı işaret etmek için kullanılır.

*/


//PUBLIC

class kutuphane{
    public $libraryname="Adü Kütüphane";
    public const YEAR=1980;

    public function getInfo(){
        $text= "Kütüphane her gün saat 08:00 - 18:00 arasında hizmet vermektedir";
        return $text;
    }
}

$nesne=new kutuphane;

echo "Kütüphanenin Adı: $nesne->libraryname";
echo "<br>";

echo "Kutuphanenin Kuruluş Yılı: " . $nesne::YEAR;
echo "<br>";

echo $nesne->getInfo();

?>


</body>
</html>