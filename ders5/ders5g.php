<?php

interface olustur{
    public function olustur($deger);
}

interface guncelle{
    public function guncelle($deger);
}

interface getir{
    public function getir($deger);
}

interface sil{
    public function getir($deger);
}

class test implements olustur,guncelle,sil,getir{
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