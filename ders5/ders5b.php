<?php

use deneme as GlobalDeneme;

abstract class deneme{
    abstract public function tanimla($deger);
}

class myo extends Deneme{
    public function tanimla($a)
    {
        echo"merhaba - myo: $a";
    }
}

class muhendislik extends deneme{
     /* Metot Deneme Sınıfı içerisindeki imzaya göre yazıldı. */
    public function tanimla($a)
    {
        echo"merhaba- mühendislik";
    }
}

$myomesaj="benim meslek yüksekokulum";
$myonesne=new myo;
$myonesne->tanimla($myomesaj);

?>