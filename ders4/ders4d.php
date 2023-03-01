<?php

//Final Class

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

 final class elemanlardahili extends PersonelIslemleri{

    //firmada çalışan personeller
   
}

// final class başka bir class tarafından miras alınamaz
class elemanlardahili2 extends Elemanlardahili{
    // class elemanlardahili2 my not inherit from final class
}

$dahili=new elemanlardahili("Reyhan Koyunlu",25000,2500);
echo $dahili->aylikdurumhesapla();
echo "<br>";
echo $dahili->yillikdurumhesapla();

?>