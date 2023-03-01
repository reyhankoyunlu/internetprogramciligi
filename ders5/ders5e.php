<?php

interface crud{
    public function olustur($deger);
    public function guncelle($deger);
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