<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php


    // class hesapla{
    //     public $birikim;
    //     public $maas;
    //     public $harcamalar;

    //     public function __construct($birikim,$maas,$harcamalar)
    //     {
    //         $this->birikim=$birikim;
    //         $this->maas=$maas;
    //         $this->harcamalar=$harcamalar;
    //     }

    //     public function kar(){
    //         $kar= ($this->maas - $this->harcamalar) + $this->birikim;
    //         return $kar;
    //     }

    //     public function zarar(){
    //         $zarar=($this->maas - $this->harcamalar) - $this->birikim;
    //         return $zarar;
    //     }

    // }

    // class karpara extends hesapla{
        
    // }

    // class zararpara extends hesapla{
            
    // }


    // $para1= new karpara(200,7000,3000);
    // echo"kar:". $para1->kar();
    // echo"<br>";
    // echo "zarar:".$para1->zarar();


// --------------------------------------------------------------


class hesapla{
    public $birikim;
    public $maas;
    public $harcamalar;

    public function __construct($birikim,$maas,$harcamalar)
    {
        $this->birikim=$birikim;
        $this->maas=$maas;
        $this->harcamalar=$harcamalar;
    }

    final public function kar(){
        $kar= ($this->maas - $this->harcamalar) + $this->birikim;
        return $kar;
    }

    public function zarar(){
        $zarar=($this->maas - $this->harcamalar) - $this->birikim;
        return $zarar;
    }

}

final class karpara extends hesapla{
    
}

class zararpara extends hesapla{
        
}


$para1= new karpara(200,7000,3000);
echo"kar:". $para1->kar();
echo"<br>";
echo "zarar:".$para1->zarar();


class miras extends karpara{
    // final class sadece 1 kez kullanılır
}
?>
    
</body>
</html>