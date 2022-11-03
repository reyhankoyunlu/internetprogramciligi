<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- son kullanıcının göreceği yerleri düzenler controller
        model veritabanı işlemleri
        wiev görünüm

-->


<?php

    class sinif{

        public function __construct($hostname="localhost",$username,$pass,$dbname)
        {
            $connection="$hostname,$username,$pass,$dbname";
            $connection;
        }

        public $isim="reyhan";
        public $soyisim="koyunlu";

        public function write(){
            
        }

    }

    $nesne=new sinif();

?>

</body>
</html>