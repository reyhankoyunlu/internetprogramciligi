<?php

interface ornek{
    public function tanim($deger);
}

//metot yazıldığı için hata oluşmaz
class contact implements ornek{
    public function tanim($deger)
    {
        //fonksiyon içeriği
    }
}

class aboutus implements ornek
{
    //Hata döndürür: Çünkü soyut arayüz sınıfı içerisinde bulunan metotlar implemente eden sınıflarda da bulunmak zorundadır
}

?>