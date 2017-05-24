<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test</title>
  </head>
  <body>
    <h1>abstract class && Interface</h1>

    <?PHP

    // uzduotis:
    // 1) sukurti interface "Edit" : kuri turi funkcijas: (kurios nera aprasytos (privalomos)!
        // 0) Ar gali tureti kintamuosius????
        // changeName($a)
        // isLogin()
        // getName()
    // 2) sukurti (abstrakcia) klase "User" :
        // 0) abstrakti kalse - NEGALI TURETI ABSTRAKCIU KINTAMUJU (BET PAPRASTUS GALI)
        // A) kuri turi neprivalomus kintamuosius:
            // name, password , createdDate, lastLogin
        // B) privaloma funkcija "Loguot()"
        // C) neprivaloma funkcija clearlastLoginTime()
    // 3) sukurti klase Admin :
        // A)  kuri panaudoja Edit ir User ~klases (implementuoti ir paveldeti)

        interface Edit {
          // interface negali tureti KINTAMUJU
          public function changeName($a);
          public function isLogin();
          public function getName();
        }
        abstract class User {
          // abstrakti kalse - NEGALI TURETI ABSTRAKCIU KINTAMUJU (BET PAPRASTUS GALI)
          public $name, $password , $createdDate, $lastLogin;

          abstract public function  Loguot();   // ja tures realizuoti kazkas kitas

          public function clearlastLoginTime() {
            echo "Jusu duomensy isvalys";
          }
        }
        class Admin extends User implements Edit {
            public function Loguot() {
              echo "Jus atsjungtas!";
            }
            public function changeName($a) {
                $this->name = $a;
            }
            public function isLogin() {
                // kazkoks kodas
            }
            public function getName(){
                return $this->name;
            }
        }

    ?>


    </body>

  </html>
