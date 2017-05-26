<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test class extensions</title>
  </head>
  <body>


<?php

class Gyvunas {
  public $alive = true;
  public $positionX;
  public $positionY;

}

class Tipas extends Gyvunas{
  public $rusis = "kate";
  public $minta = "mesa";
}

class Liutas extends Tipas {
  private $name;
  public $kailis = true;
  public $spalva = "#a34baa";
  public function medzioti () {
    //kazkoks kodas
  }
  private function iToleta () {
    //kazkoks kodas
  }
  public function setName($x) { // sukuriam funkcija, kad galetume keisti privatu kintamajami
    $this->name = $x;
  }
  public function getName () { // sukuriam funkcija issivesti privaciam kintamajam
    return $this->name;
  }
}

$simba = new Liutas();
$hdaras = new Liutas();
$lita = new Liutas();

// uzduotis1: pakeisti visu triju liutu spalvas (ir isvesti su echo)

$simba->spalva = "violetine";
$hdaras->spalva = "juodas";
$lita->spalva = "ruda";

echo "Simbos spalva: " . $simba->spalva . "<br />";
echo "Hdaras spalva: " . $hdaras->spalva . "<br />";
echo "Lita spalva: " . $lita->spalva . "<br />";


// print_r($simba); //atspausdina vis aobj

// uzduotis2: liuto klasei susikurti privatu kintamaji "name" ir sukurti 2 funkcijas jo reiksmei pakeisti ir paimti "setName($x)", "getName()"

$simba->setName("bembis");
echo "Simbos naujas vardas: " . $simba->getName() . "<br />";
$hdaras->setName("plaktukas");
echo "Hdaras naujas vardas: " . $hdaras->getName() . "<br />";


// uzduotis3:
// sukurti dvi klase: User, Admin
// User klase turi: kintamuosius username, password, rights ir funkcija login($name, $pass)
// Admin klase turi: funkcijas changeUserName($nm), changeRights($rgt)

class User {
  public $username;
  protected $password;
  public $rights;
  function Login ($name, $pass) {
    //funkcija
  }
}

class Admin extends User {
  public function changeUserName ($nm) {
    $this->username = $nm;
  }
  public function changeRights ($rgt) {
    $this->rights = $rgt;
  }
}


$adminas = new Admin ();
print_r($adminas);

$adminas->changeUserName("Petras");
echo "<br />" . "vartotojo vardas: " . $adminas->username . "<br />";
$adminas->changeRights("moderator");
echo "vartotojo teises: " . $adminas->rights . "<br />";
// echo "vartotojo kodas: ". $adminas->password . "<br />"; // tai nera public/viesa reiksme

print_r($adminas);


 ?>




  </body>
</html>
