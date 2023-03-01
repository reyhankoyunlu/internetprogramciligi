<?php

use crud as GlobalCrud;

interface crud{
    public function olustur($deger);
    public function guncelle($deger);
    public function getir($deger);
    public function sil($deger);
}

interface database{
    public function connectdb($dbname);
}

abstract class sablon{
    abstract public function sayfayapisi($icerik);
}

//bir sınıf bir abstract classı extend edebilir birden fazla interfacei implemente edebilir
class test extends sablon implements crud,database{

    //abstract class
    public function sayfayapisi($icerik)
    {
    }


    //1.interface
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
    

    //2.interface
    public function connectdb($dbname)
    {
    }
}

?>