<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h1>abstract class && interface</h1>

<?php

// uzduotis:
// 1) sukurti interface Edit: turi funkcijas, kurios nera aprasytos
// ar gali tureti kintamuosius turbut kad net
// (privalomos)!
// changeName($a)
// isLogin
// getName
// 2) sukurti (abstrakcia) klase User :
// A) kuri turi neprivalomus kintamuosius:
// name, password
// B) neprivalomus kintamuosius :
// createdDate, LastLogin
// C) privaloma funkcija "Logout()"
// D) neprivaloma funkcija clearLastLoginTime"()"
// 3) sukurti klase Admin:
// a) kuri panaudoja Edit ir User klases (implementuoti ir paveldeti)
//

// uzduotis 1 bandymas isspresti

interface Edit {
  // interface negali turet kintamuju
public function changeName($a);
public function isLogin();
public function getName();
}
// uzduotis 2 bandymas
// a dalis
abstract class User {
  // gali turet kintamuosius bet negali turet abstrakciu kintamuju
        public $name;
        public $password;
        public $createdDate;
        public $LastLogin;
        // c dalis
        abstract public function Logout();
        // d dalis
        public function clearLastLoginTime() {
echo "jusu duomenys istrinti";
          }
}
// 3 uzduotis

class Admin extends User implements Edit {
    public function Logout() {
      echo "jus esate atjungtas!";
     }
  public function changeName($a) {
$this->name = $a;
  }
  public function isLogin() {
// kazkoks kodas
  }
  public function getName() {
return $this->name;
  }
}


// public $name;
//  public $password;







 ?>


  </body>
</html>
