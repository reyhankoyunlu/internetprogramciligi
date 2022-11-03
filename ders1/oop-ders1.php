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

            class Personel{
                /*Attributes - Özellikler */
                public $id="1";
                public $ad="Reyhan";
                public $yas=21;

                var $cinsiyet="Kadın";

                public const TCNO=111111;



                function __construct()
                {
                    echo "yapıcı method çalıştı";
                }

                /*function */

                public function selamVer1(){
                    echo "merhaba selamVer1 çalıştı";
                }

                public function selamVer2(){
                    return "merhaba selamVer2 çalıştı";
                }
            }

            $nesne=new Personel;

            echo $nesne->ad;
            echo "<br>";
            echo $nesne->cinsiyet;
            echo "<br>";
            echo $nesne::TCNO;
            echo "<br>";
            $nesne->selamVer1();
            echo "<br>";
            echo $nesne->selamVer2();
            echo "<br>";

    
    ?>


</body>
</html>