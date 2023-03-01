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

class: Herhangi bir programlamada belirli bir veya daha fazla işi gerçekleştirmek üzere önceden hazırlanan nesnelerdir

new: Daha önceden tanımlanmış olan herhangi bir sınıfı çağırmak için kullanılır

KURALLAR:

1- Sınıf isimleri her zaman anlamlı olmalıdır.
2- Sınıf isimleri içerisinde alfanumerik(A-Z , a-z ,  0-9) değerler ve _ kullanılabilir.
3- Sınıf isimleri mutlaka bir harf veya _ ile başlamalıdır.
4- Sınıf isimleri rakam ile başlayamaz.
5- Sınıf isimleri içerisinde hiçbir zaman boşluk ve türkçe karakter bulunmaz, özel karakterler(~|*?) kullanılamaz.
6- Sınıf isimleri tanımlanırken, php tarafından kullanılmakta olan isimler/tanımlar kullanılamaz.
7- Sınıf isimleri hiçbir zaman birden fazla kez kullanılamaz. (Namespace(isim uzayı) kullanılması durumunda birden fazla kes farklı namespace içerisinde kullanılabilir.)
8- Sınıf isimleri küçük/büyük harf duyarlı değildir.
9- Sınıf kapsama/etki alanı kurallarına tabidir.

YAPISI:

class isim{
    kod bloğu...
}


__construct: Sınıfın yapıcı metodudur. Sınıf çağırıldığında otomatik çalışır.
__destruct: Sınıfın yıkıcı metodudur. Sınıfın işlemi bittiğinde otomatik çalışır.

-Yapıcı metotlara parametre gönderilebilir.
-Yapıcı metotlara gönderilecek parametrelere varsayılan değerleratanabilir(localhost).
-Değer gelmediğinde varsayılan değer aktif olur.
-Değer gelirse de gelen değer aktif olur

*/


class sinif{
    public function __construct($hostname="localhost", $usernamer, $pass, $dbname)
    {
        $connection="$hostname,$usernamer,$pass,$dbname";
        return $connection;
    }

    /*public her yerden erişilebilir */

    public $isim="Reyhan";
    public $soyisim="Koyunlu";

    public function write(){
        $metin="write fonksiyonu çalıştı";
        return $metin;
    }

    public function __destruct()
    {
        echo "yıkıcı metot çlıştı";
    }
}

$nesne=new sinif("reyhankoyunlu.com","rkoyunlu","123","rkdb");

echo gettype($nesne);
echo "<br>";
print_r($nesne);

echo $nesne->write(); //nesne içindeki değişkene erişim


?>


</body>
</html>