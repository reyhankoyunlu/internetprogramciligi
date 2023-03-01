<?php

class PersonelIslemleri{
    public $isimsoyisim;
    public $gelir;
    public $gider;

    public function isimekle($namesurname){
        $this->isimsoyisim=$namesurname;
    }

    public function gelirekle($income){
        $this->gelir=$income;
    }

    public function giderekle($expense){
        $this->gider=$expense;
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

$dahili=new elemanlardahili();
$dahili->isimekle("Reyhan Koyunlu");
$dahili->gelirekle(25000);
$dahili->giderekle(2500);
echo $dahili->aylikdurumhesapla();
echo "<br>";
echo $dahili->yillikdurumhesapla();

echo "<br><br><br><br> Şirket dışı eleman:";
$harici=new elemanlarharici();
$harici->isimekle("İlker Kücükyılmaz");
$harici->gelirekle(20000);
$harici->giderekle(200);
echo $harici->aylikdurumhesapla();
echo "<br>";
echo $harici->yillikdurumhesapla();


?>