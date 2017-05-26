<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>abstract class && Interface</h1>


<?php

// uzduotis:
// 1) sukurti interface Edit : turi funkcijas, kurios nera aprasytos!
    // changeName ($a)
    // isLogin()
    // getName()
// 2) sukurti (abstrakcia) klase User :
    // A) kuri turi neprivalomus kintamuosius:
        // name, password, createDate, LastLogin
    // B) privaloma funkcija :
        // "logout()"
    // C) neprivaloma funkcija :
        // "clearLastLoginTime()"
// 3) sukurti klase Admin :
    // kuri panaudoja Edit ir User ~klases (implementuoti ir paveldeti)


// 1 uzduotis
interface Edit { // interface negali tureti kintamuju
  public function changeName ($a);
  public function isLogin ();
  public function getName ();
}
// 2 uzduotis
abstract class User { // abstract negali tureti "abctract kintamuju", bet paprastus kintamuosius tureti gali
private $name;
public $password;
public $createDate;
public $LastLogin;
abstract public function logOut ();
public function clearLastLoginTime () {
  echo "Jusu duomenys issivalys";
}
}

// 3 uzduotis

class Admin extends User implements Edit {
  public function logOut () {
    echo "Jus atjungtas!";
  }
  public function isLogin (){
    echo "cia prisijungimas";
  }
  public function getName (){
    return $this->name;
  }
  public function changeName ($a) {
    $this->name = $a;
}
}


$adminas = new Admin();
$adminas->changeName("Jonas");
echo "Naujas vardas: " . $adminas->getName() . "<br />";
echo $adminas->logOut() . "<br />";
echo $adminas->isLogin() . "<br />";
echo $adminas->clearLastLoginTime() . "<br />";

print_r($adminas);

 ?>

  </body>
</html>
