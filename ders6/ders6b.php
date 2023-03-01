<!-- 
a.	İsmini kendinizin belirlediği 1 tane abstract class yazınız. Bu class içerisinde en az 1 public fonksiyon bulunmalıdır.
b.	İsimlerini kendinizin belirlediği 2 tane interface yazınız. Yazılan interface’ler içerisinde en az 1’er public fonksiyon bulunmalıdır.
c.	İsmini kendinizin belirlediği bir sınıf oluşturunuz ve bu sınıfa abstract class’ı extend alınız, interface'leri implemente ediniz.
d.	Bir önceki madde de oluşturulan sınıfın constract metodunda 3 tane değişken alarak bu değişkenleri sınıf içerisindeki değişkenlere atayınız.
e.	Sınıf içerisine 2 tane public metot yazınız.
-->

<?php

use deneme as GlobalDeneme;

abstract class deneme{
    abstract public function yil();
}


interface ad{
    public function ad();
}

interface soyad{
    public function soyad();
}

class kisi extends deneme implements ad,soyad{
    public $a;
    public $b;
    public $c;
    public function __construct($a,$b,$c)
    {
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;
    }

    public function yil()
    {
    }
    public function ad()
    {
    }
    public function soyad()
    {
    }

    public function dondur()
    {
        return $this->c;
    }

    public function cnmcnmalicnm()
    {
    }

}

?>