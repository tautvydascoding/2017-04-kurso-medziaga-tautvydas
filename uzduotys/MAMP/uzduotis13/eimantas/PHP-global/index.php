<h2> Testuojame PHP OBJ</h2>

<?php
$name = "uz klases - globalus";
$lname = "globalus";

class Motoroleris {
  public $brand = "tttt";
  public $name = "x2017";
  private $topSpeed = 150;
  private $isibegejimas = 7;

  public function __construct ($x){
    $this->brand = $x;
  }
  public function setTopSpeed ($x) {
    $this->topSpeed = $x;
  }
  public function getTopSpeed ($x) {
    return $this->topSpeed;
}
public function setGName($y){
global $name; //pasiskelbi, kad dirbsi su klobaliu kintamuoju
$name = $y;
}
}

$moto = new Motoroleris("Natalija");
echo "Motoroleris: $moto->brand <br><br><br><br><br><br>";

$moto->setTopSpeed(160);
echo "Moto top speed:" . $moto->getTopSpeed() . "<br>";

$name = "vardas2";
echo $name . "<br>";

$moto->setGName("vardas3");
echo $name . "<br>";
?>
