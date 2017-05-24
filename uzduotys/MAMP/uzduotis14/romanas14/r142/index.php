<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test class extensions</title>
  </head>
  <body>
<?php

class Gyvunas {
  public $alive=true;
  public $positionX;
  public $positionY;
}

class Tipas extends Gyvunas {
  public $rusis="kate";
  public $minta="mesa";
}
class Liutas extends Tipas {
private $vardas="zorro";
public $kailis=true;
public $spalva="#aa33bb";
public function medzioti() {
  //kazkoks kodas
}
private function iToleta(){
  //kazkoks kodas
}
public function setname($v){
  $this->vardas=$v;
}
public function getname(){
return $this->vardas;
}
}

$simba = new Liutas ();
$daras = new Liutas ();
$lita = new Liutas ();

$simba->spalva="aaaaaa";  //priskiriam spalvas
$daras->spalva="bbbbbb";
$lita->spalva="cccccc";

echo "simbos spalva:" .$simba->spalva. "<br>"; //spausdinam spalvas
echo "daras spalva:" .$daras->spalva. "<br>";
echo "lita spalva:" .$lita->spalva. "<br>";

print_r($simba);


//==========  uzduotis 2=============
// Liuto klaseje sukurti privatu kint $vardas ir sukurti 2 funkcijas setname($x), getname($x).

$simba->setname("bobas");  //priskiriam nauja varda
echo "Simbos vardas <br><br>".$simba->getname();

print_r($simba);
$simba->setname("monk");
echo "Simbos vardas <br><br>".$simba->getname();

//===============  uzduotis 3  ========================
//1. suksurti dvi klases User ir Admin
//2. user klasei sukurti kint: username, password, rights ir funkcija Login ($name, $pass)
//3.Admin klaseje funkcijas: changeUserName($nm), changeRights($rgt)



class User {
private $name="Tim";
private $pass="xcv5";
private $rights="publisher";
public function Login ($name,$pass){
  //kazka logina
}
}
class Admin extends User {

public function changeUserName($nnm) {  //funkcija veikia tik admino viduje. Userio $name nekeicia.
  $this->name=$nnm;
}
public function changeRights($rgt) {
  $this->rights=$rgt;
}
}

$tomas = new User();
$adminas= new Admin();

print_r($tomas);
print_r($adminas);


$adminas->changeUserName("jonukas");
echo "naujas userio vardas: $adminas->name <br>";
print_r($tomas);

$adminas->changeRights('moderator');
echo "vartotojo teises:  $adminas->rights <br>";
print_r($tomas);

 ?>



  </body>
</html>
