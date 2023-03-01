<?php

interface crud{
   private public function olustur($deger); //hata: soyut arayüz sınıfı içerisinde private kullanılmaz
   protected public function guncelle($deger); //hata: soyut arayüz sınıfı içerisinde protected kullanılmaz
    public function getir($deger);
    public function sil($deger);

}

class test implements crud{
    public function olustur($deger)
    {
    }

    public function sil($deger)
    {
    }

    public function getir($deger)
    {
    }

    public function guncelle($deger)
    {
    }
}

?>