<?php

use elemanlardahili as GlobalElemanlardahili;

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

    public function aylikdurumhesapla(){
        return($this->gelir - $this->gider);
    }

    public function yillikdurumhesapla(){
        return(($this->gelir - $this->gider)*12);
    }

}

class elemanlardahili extends PersonelIslemleri{

    //firmada çalışan personeller
    public function aylikdurumhesapla()
    {
        return parent::yillikdurumhesapla();
    }

    public function yillikdurumhesapla()
    {
        return "şirketin içindeki personelin yıllık durumu buradan hesaplanır";
    }
}

class elemanlarharici extends PersonelIslemleri{
    //firma dışında çalışan elemanlar
}

$dahili=new elemanlardahili("Reyhan Koyunlu",25000,2500);
echo $dahili->aylikdurumhesapla();
echo "<br>";
echo $dahili->yillikdurumhesapla();

echo "<br><br><br><br> Şirket dışı eleman:";
$harici=new elemanlarharici("İlker Kücükyılmaz",20000,200);
echo $harici->aylikdurumhesapla();
echo "<br>";
echo $harici->yillikdurumhesapla();

?>