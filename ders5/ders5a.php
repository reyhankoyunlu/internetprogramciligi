<?php

/*

Abstract: Belirtilecek olan herhangi bir sınıfı soyut sınıf haline dönüştürmek için kullanılır

Interface: Belirtilecek olan herhangi bir sınıfı, soyut arayüz sınıfı haline dönüştürmek için kullanılır

Implaments: Daha önce oluşturulan herhangi bir arayüa sınıfını ilgili sınıfa tanımlamak/uygulamak için kullanılır

Abstaract:
- Soyut metotlar içerebilir
- Normal metotlar içerebilir
- Özellik içerebilir
- Sabitleri içerebilir
- Public, private ve protected tanımlanabilir
- Herhangi bir sınıf sadece sadece bir tane abstract class içerebilir
- Abstract metotlar sadece abstract classlar içine yazılmalıdır

Interface:
- soyut metotlar içerebilir
- public erişim belirleyiciye sahip olma kaydıyla normal metotlar içerebilir
- sabit değişken içerebilir
- herhangi bir sınıfta birden fazla interface kullanılabilir

*/


abstract class deneme{
    abstract public function tanimla($deger);
}

// bu kısım sınıfın kendi özelliklerine göre yazılmak zorundadır
class myo extends deneme{
    public function tanimla($a)
    {
        echo "merhaba";
    }
}

class muhendislik extends deneme{
    public function tanimla($a)
    {
        echo"merhaba-mühendislik";
    }
}

class egitim extends deneme{
    public function tanimla($a)
    {
        echo"merhaba-eğitim";
    }
}

class yabancıdiller extends deneme
{
    //hata döndürür çünkü soyut sınıf içerisinde bulunan metotlar muhakkak soyut sınıftan türeyen alt sınıflarda da bulunmalıdır. Birden fazla bu sınıfı miras alan somut sınıf varsa miras alan tüm sınıflar bu metodu yazmak zorundadır.

}

?>