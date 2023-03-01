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
    function __construct()
    {
        echo "yapıcı metot çalıştı";
    }

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

    function __destruct()
    {
        echo "yıkıcı metot çalıştı";
    }

}

?>


</body>
</html>