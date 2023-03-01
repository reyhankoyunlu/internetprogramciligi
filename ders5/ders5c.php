<?php

abstract class tema{
    abstract public function headeralani($arkaplanrengi,$headerlogo);
    abstract public function bodyalani($icerik);
    abstract public function footeralani($copyrightmetni);
}

class aboutpage extends tema{
    public function headeralani($arkaplanrengi, $headerlogo)
    {     
    }

    public function bodyalani($icerik)
    {
    }

    public function footeralani()
    {
        //hatanın sebebi metodun imzasında belirtilen parametrelerin somut sınıf içerisinde yazılan metotta da kullanılması gerekli. 
    }

}

?>