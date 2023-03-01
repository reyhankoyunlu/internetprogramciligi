<?php

class dersicerikleri{
    public function java(){
        return"java kurs içeriği";
    }

    public function php(){
        return"php kurs içeriği";
    }

    public function sql(){
        return"sql kurs içeriği";
    }

}

class Egitmenler extends dersicerikleri{
    public function java(){
        $kim="Erkan Güler - " . parent::java();
        return $kim;
    }

    public function php(){
        $kim="Mehmet Can Hanaylı - " . parent::php();
        return $kim;
    }

    public function sql()
    {
        $kim="Taner Karataş - " . parent::sql();
        return $kim;
    }

    //miras alınan sınıfın içindeki metodu çağır
    public function extendmetod(){
        return parent::java();
    }

    //bu sınıfın içindeki metodu çağır
    public function sinifinmetodu(){
        return $this->java();
    }

}

$egitmenler=new Egitmenler;

echo $egitmenler->extendmetod();
echo "<br>";
echo $egitmenler->sinifinmetodu();
echo "<br>";
echo $egitmenler->java();


?>