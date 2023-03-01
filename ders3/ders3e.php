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


class kutuphane{
    private $libraryname="adü kütüphane";
    private const YEAR = 1980;

    public function getInfo(){
        $text="Kütüphane hergün saat 08:00 - 18:00 arasında hizmet vermektedir";

        $isim=$this->libraryname;
        $kurulus=self::YEAR;
        return "$text-$isim-($kurulus)";
    }
}

$nesne=new kutuphane;

echo $nesne->getInfo();


?>

</body>
</html>