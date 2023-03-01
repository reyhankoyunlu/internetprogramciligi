<?php

/* 
Uygulama-1
1. Kendi belirleyeceğiniz isimde bir sınıf oluşturunuz.
2. constract metodunda 3 tane değişken alarak bu değişkenleri sınıf içerisindeki değişkenlere atayınız.
3. sınıf içerisine public 2 tane metot yazınız.
4. Oluşturmuş olduğunuz sınıfı miras alan 2 yeni sınıf yazarak metot overriding işlemini örneklendiriniz.
*/

class sinav{
    public $vize;
    public $final;
    public $but;

    public function __construct($vize,$final,$but)
    {
        $this->vize=$vize;
        $this->final=$final;
        $this->but;$but;
    }

    public function kaldi(){
        return(($this->vize)+($this->final)+($this->but))/3;
    }
    public function gecti(){
        return (($this->vize)+($this->final))/2;
    }
}

$not=new sinav(80,50,60);

echo $not->kaldi();
echo "<br>";
echo $not->gecti();


?>