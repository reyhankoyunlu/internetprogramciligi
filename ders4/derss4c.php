<?php

//Final Metot

class PersonelIslemleri{
    public $isimsoyisim;
    public $gelir;
    public $gider;
   
    public function __construct($isim,$gelir,$gider)
    {
        $this->isimsoyisim=$isim;
        $this->gelir=$gelir;
        $this->gider=$gider;
    }

    //aylikdurumhesapla metodu final olarak tanımlandığı için miras alınan hiçbir sınıf içerisinde tekrar oluşturulamaz
    final public function aylikdurumhesapla(){
        return($this->gelir - $this->gider);
    }

    public function yillikdurumhesapla(){
        return(($this->gelir - $this->gider)*12);
    }
}

class elemanlardahili extends PersonelIslemleri{

    //firmada çalışan personeller
    //hata verir : cannot override final method PersonelIslemleri::aylikdurumhesapla
    public function aylikdurumhesapla() 
    {
        echo "sınıfımın aylıkdurumhesapla metodu";
    }

    public function yillikdurumhesapla()
    {
       return parent::yillikdurumhesapla();
    }
}


$dahili=new elemanlardahili("Reyhan Koyunlu",25000,2500);
echo $dahili->aylikdurumhesapla();
echo "<br>";
echo $dahili->yillikdurumhesapla();

?>