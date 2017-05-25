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
    //0) ar gali tureti kintamuosius? ----- NEGALI
    // 1) sukurti interface "Edit" : turi funkcijas, kurios nera aprasytos (privalomos)!
        // changeName($a)
        // isLogin()
        // getName()
    // 2) sukurti (abstrakcia) klase "User" :
        // 0) abstrakti klase - NEGALI TURETI ABSTRAKCIU KINTAMUJU
        // A) kuri turi privalomus kintamuosius:
            // name, password
        // B) neprivalomus kintamuosius:
            //  createdDate, lastLogin
        // C) privaloma funkcija "Loguot()"
        // D) neprivaloma funkcija clearlastLoginTime()
    // 3) sukurti klase Admin :
        // A)  kuri panaudoja Edit ir User ~klases (implementuoti ir paveldeti)



        //implements leidzia implementuoti tik interface'us (idiegti)
        // prie kuriu funkcijo yra parasyta abstract, tai reiskia, kad jas tures suprogramuoti tas, kas jas paveldejo. Tas pats ir su interface funkcijomis, visos interfaces funkcijos turi buti suprogramuotos to, kas jas paveldi.

        interface Edit {
          function changeName($a);
          function isLogin();
          function getName();
        }

        abstract class User {
        public $name = "nameX";
        public $pass = "passY";
        public $createDate = "2000";
        public $lastlogin = "today";
        abstract public function Logout();
        public function clearlastLoginTime(){}
        }

        class Admin extends User implements Edit {  // extends - paveldimumas
          public function changeName($a){
            $this->name = $a;
          }
          function isLogin(){}
          function getName(){}
          public function Logout(){
            echo "Jus atjungtas";
          }
        }














    ?>


    </body>

  </html>
