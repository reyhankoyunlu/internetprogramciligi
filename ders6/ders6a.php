<!-- 
    a.	Ogrenciler isimli bir sınıf (class) oluşturunuz. id, öğrenciNo, adi, soyadi, vize, final özelliklerini private tanımlayıp, construct metodunu bu değişkenleri parametre olarak alabilecek şekilde yazınız. (Bu sınıftan bir nesne oluşturulduğunda constract metotta bulunan değişkenlere değer atanmasının sağlanabileceği şekilde gerçekleştiriniz.)
    b.	Ogrenciler sınıfı içerisinde Get ve Set işlemi yapan 2 tane farklı metot yazınız. (örneğin öğrenci adını geri gönderen bir metot veya vize puanını alıp içerdeki vize notuna eşitleyen metot.)
    c.	Ogrenciler sınıfı içinde notHesapla isimli bir fonksiyon yazınız. Fonksiyon çalıştığında sınıf içinde tanımlanan vize ve final notlarının ortalamasını alıp geriye sonucu göndermesini sağlayınız.
    d.	Ogrenciler sınıfından bir nesne türetip yazmış olduğunuz get, set ve notHesapla fonksiyonlarını çalıştırınız.
-->

<?php

class ogrenciler{
    private $id;
    private $ogrencino;
    private $ad;
    private $soyad;
    private $vize;
    private $final;

    public function __construct($ogrencino,$ad,$soyad,$vize,$final)
    {
        $this->ogrencino;
        $this->ad;
        $this->soyad;
        $this->vize;
        $this->final;
    }

    public function isimgetir(){
        return $this->ad;
    }

    public function vizenotudegistir($yeninot){
        $this->vize=$yeninot;
    }

    public function nothesapla(){
        return (($this->vize)-($this->final))/2;
    }
}

$ogrenci=new ogrenciler("123","reyhan","koyunlu",40,80);
echo $ogrenci->isimgetir();
echo $ogrenci->vizenotudegistir(60);
echo $ogrenci->nothesapla();

?>