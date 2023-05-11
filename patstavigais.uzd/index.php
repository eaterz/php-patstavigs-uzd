<?php
echo "<pre>";
class Car{
    public $krasa;
    public $cena;
    private $atrums;
    private $kuragada;

    function __construct($initkrasa,$initcena,$initatrums,$initkuragada){
        echo "__construkt: Car"."<br>";
        $this->krasa=$initkrasa;
        $this->cena=$initcena;
        $this->atrums=$initatrums;
        $this->kuragada=$initkuragada;
    }
    public function getkrasa(){
        return $this->krasa;
    }
    public function getcena(){
        return $this->cena;
    }
    public function getatrums(){
        return $this->atrums;
    }
    public function getkuragada(){
        return $this->kuragada;
    }
    public function setkrasa($newkrasa){
        return $this->krasa=$newkrasa;
    }


}
class BMW extends Car{
public $durvjuskaits;
    public function __construct($initkrasa,$initcena,$initatrums,$initkuragada,$initdurvjuskaits){
        parent::__construct($initkrasa,$initcena,$initatrums,$initkuragada);
        $this->durvjuskaits=$initdurvjuskaits;
        
    }
    public function getdurvis(){
        return $this->durvjuskaits;
    }
    public function setcena($newcena){
        return $this->cena=$newcena;
    }
}
class MercedesAMG extends Car{
public $riepas;
    public function __construct($initkrasa,$initcena,$initatrums,$initkuragada,$initriepas){
        parent::__construct($initkrasa,$initcena,$initatrums,$initkuragada);
        $this->riepas=$initriepas;
    }
    public function getriepas(){
        return $this->riepas;
    }
}
$car=new Car("zila","3000 eur","100 km/h","2020 gada");
$bmw=new BMW("sarkans","4500 eur","300 km/h","2018 gada","2 durvis");
$merc=new MercedesAMG("balts","3450 eur","250 km/h","2013 gada","6 riepas");

var_dump($car);
echo "<br><br>";
echo "Mainu krāsu";
echo "<br><br>";
$car->setkrasa("melns");
echo "Car:"."<br>"."krasa - ".$car->getkrasa()."<br>"."cena - ".$car->getcena()."<br>"."atrums - ".$car->getatrums()."<br>"."izlaišanas gads - ".$car->getkuragada();
echo "<br><br>";
var_dump($bmw);
echo "<br><br>";
echo "Mainu cenu";
$bmw->setcena("5000 eur");
echo "<br><br>";
echo "BMW:"."<br>"."krasa - ".$bmw->getkrasa()."<br>"."cena - ".$bmw->getcena()."<br>"."atrums - ".$bmw->getatrums()."<br>"."izlaišanas gads - ".$bmw->getkuragada()."<br>"."durvju skaits - ".$bmw->getdurvis();
echo "<br><br>";
var_dump($merc);
echo "<br><br>";
echo "MercedesAMG:"."<br>"."krasa - ".$merc->getkrasa()."<br>"."cena - ".$merc->getcena()."<br>"."atrums - ".$merc->getatrums()."<br>"."izlaišanas gads - ".$merc->getkuragada()."<br>"."riepus skaits - ".$merc->getriepas();







?>