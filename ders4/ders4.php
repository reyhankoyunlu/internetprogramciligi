<?php

// class Islemler
// {

//     public $isimSoyisim;
//     public $gelir;
//     public $gider;

//     public function isimEkle($isimSoyisim)
//     {
//         $this->isimSoyisim = $isimSoyisim;
//     }

//     public function gelirEkle($aylikGelir)
//     {
//         $this->gelir = $aylikGelir;
//     }

//     public function giderEkle($aylikGider)
//     {
//         $this->gider = $aylikGider;
//     }


//     public function aylikDurumHesapla()
//     {
//         $netKazanc =  $this->gelir - $this->gider;
//         return $netKazanc;
//     }

//     public function yillikKazanc()
//     {
//         $yillikKazanc = ($this->gelir - $this->gider) * 12;
//         return $yillikKazanc;
//     }
// }

// class ElemanlarDahili extends Islemler
// {
//     /* Firmada çalışan elemanlar. */
// }

// class ElemanlarHarici extends Islemler
// {
//     /* Firmanın hizmet aldığı elemanlar. */
//     /* Extend alınan sınıf içerisindeki aynı isimli metot ezildi. Yani bu sınıf içerisindeki metot çalıştı. */
//     public function yillikKazanc()
//     {
//         return "Kazanamadı";
//     }
// }


// $dahili1 = new ElemanlarDahili();
// $dahili1->isimEkle("Mehmet");
// $dahili1->gelirEkle(5000);
// $dahili1->giderEkle(3500);
// echo $dahili1->aylikDurumHesapla();
// echo "<br>";
// echo $dahili1->yillikKazanc();


// echo "<br>";

// $harici1 = new ElemanlarHarici();
// $harici1->isimEkle("Ayşen");
// $harici1->gelirEkle(8000);
// $harici1->giderEkle(3500);
// echo $harici1->aylikDurumHesapla();
// echo "<br>";
// echo $harici1->yillikKazanc();



// --------------------------------------------------------------------------------------------------------------------------------

// class Islemler
// {
//     public $isimSoyisim;
//     public $gelir;
//     public $gider;

//     function __construct($isimSoyisim, $gelir, $gider)
//     {
//         $this->isimSoyisim = $isimSoyisim;
//         $this->gelir = $gelir;
//         $this->gider = $gider;
//     }

//     public function aylikDurumHesapla()
//     {
//         $netKazanc =  $this->gelir - $this->gider;
//         return $netKazanc;
//     }

//     public function yillikKazanc()
//     {
//         $yillikKazanc = ($this->gelir - $this->gider) * 12;
//         return $yillikKazanc;
//     }
// }

// class ElemanlarDahili extends Islemler
// {
//     /* Firmada çalışan elemanlar. */
// }

// class ElemanlarHarici extends Islemler
// {
//     /* Firmanın hizmet aldığı elemanlar. */
// }


// $dahili1 = new ElemanlarDahili("Mehmet", 5000, 1500);
// echo $dahili1->aylikDurumHesapla();
// echo "<br>";
// echo $dahili1->yillikKazanc();


// echo "<br>";

// $harici1 = new ElemanlarHarici("Ayşen", 8000, 3500);
// echo $harici1->aylikDurumHesapla();
// echo "<br>";
// echo $harici1->yillikKazanc();


// ---------------------------------------------------------------------------------------


// /* Final Metot Örneği */
// class Islemler
// {
//     public $isimSoyisim;
//     public $gelir;
//     public $gider;

//     function __construct($isimSoyisim, $gelir, $gider)
//     {
//         $this->isimSoyisim = $isimSoyisim;
//         $this->gelir = $gelir;
//         $this->gider = $gider;
//     }

//     /* aylikDurumHesapla metodu final olarak belirlendiği için miras alınan hiçbir sınıf içerisinde tekrar oluşturulamaz.*/
//     final public function aylikDurumHesapla()
//     {
//         $netKazanc =  $this->gelir - $this->gider;
//         return $netKazanc;
//     }

//     public function yillikKazanc()
//     {
//         $yillikKazanc = ($this->gelir - $this->gider) * 12;
//         return $yillikKazanc;
//     }
// }

// class ElemanlarDahili extends Islemler
// {
//     /* Firmada çalışan elemanlar. */

//     public function aylikDurumHesapla()
//     {
//         return "Firma Elemanları İçin Hazırlandı.";
//     }

//     public function ustSinifinMetodu()
//     {
//         $metot = parent::yillikKazanc();
//         return $metot;
//     }
// }


// $dahili1 = new ElemanlarDahili("Mehmet", 5000, 1500);

// echo $dahili1->aylikDurumHesapla();
// /* Oluşan  Hata : Cannot override final method Islemler::aylikDurumHesapla() in ... */


// -----------------------------------------------------------------------------------------------------------------------------



/* Final Class Örneği */


class Islemler
{
    public $isimSoyisim;
    public $gelir;
    public $gider;

    function __construct($isimSoyisim, $gelir, $gider)
    {
        $this->isimSoyisim = $isimSoyisim;
        $this->gelir = $gelir;
        $this->gider = $gider;
    }

    public function aylikDurumHesapla()
    {
        $netKazanc =  $this->gelir - $this->gider;
        return $netKazanc;
    }

    public function yillikKazanc()
    {
        $yillikKazanc = ($this->gelir - $this->gider) * 12;
        return $yillikKazanc;
    }
}

final class ElemanlarDahili extends Islemler
{
    /* Firmada çalışan elemanlar. */
}


/* Final Class Başka bir class tarafından miras alınamaz. */
class ElemanlarDahili2 extends ElemanlarDahili
{
    /* Hata: Class ElemanlarDahili2 may not inherit from final class */
}

