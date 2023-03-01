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

class personel{

    /*attributes özellikleri */

    public $id="1";
    public $ad="reyhan";
    public $yas=21;

    var $cinsiyet="kadın";

    public const TCNo=11111;

    /*fonksiyonlar */

    public function selamver1(){
        echo "selamver1 çalıştı";
    }

    public function selamver2(){
        echo "selamver2 çalıştı";
    }

}


$nesne= new personel;
echo "<br> Normal bir attribute nesne üzerinden -> işareti ile çağırılır <br>";

echo $nesne->ad;
echo "<br><br>";

echo $nesne->cinsiyet;
echo "<br><br>";

echo "<br> Sabit bir attribute nesne üzerinden :: işareti ile çağırılır <br>";

echo $nesne::TCNo;
echo "<br><br>";

$nesne->selamver1();
echo "<br><br>";

$gelendeger=$nesne->selamver2();
echo $gelendeger;


?>


</body>
</html>