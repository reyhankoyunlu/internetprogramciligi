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

class welcome{
    public function hello($isim="reyhan",$soyisim="koyunlu"){
        $text="Merhaba $isim $soyisim";
        return $text;
    }
}

$nesne=new welcome;

echo $hello1=$nesne->hello("ilker","kücükyılmaz");
echo "<br>";

echo $hello2=$nesne->hello();
echo "<br>";

$isim="ayşe";
$soyisim="naz";

echo $hello3=$nesne->hello($soyisim,$isim);

//parametrelerin sırası önemli

?>


</body>
</html>