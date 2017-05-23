<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test</title>
  </head>
  <body>
    <h1>abstract class && Interface</h1>

    <?php

        //Užduotis:
        //1) sukurti interface Edit: turi funkcijas kurios nėra aprašytos!
        //    *changeName($a), isLogin(), getName();
        //2) sukurti abstrakčia klasę User kuri turi:
        //    *privalomus kintamuosius: name, password;
        //    *kintamuosius: createDate, lastLogin;
        //    *privaloma funkciją: logOut();
        //    *neprivaloma funkcija: clearLastLoginTime();
        //3)sukurti klasę Admin
        //    kuri panaudoja Edit ir User klase

        interface Edit {
          public function changeName($x);
          public function isLogin();
          public function getName();
        }

        abstract class User {
          public $name = "1";
          public $password = "2";
          public $createDate = "3";
          public $lastLogin = "4";
          
          abstract public function logout ();
          public function clearLastLoginTime() {}
        }

        class Admin extends User implements Edit {
          public function changeName($x) {
            return "changeName";
          }
          public function isLogin() {
            return "isLogin";
          }
          public function getName() {
            return "getName";
          }
          function logout () {
            return "logout";
          }
        }

        $adminas = new Admin;
        print_r($adminas);
        echo "<br>";
        echo "Adminas1: " . $adminas->name . "<br>";
        echo "Adminas2: " . $adminas->password . "<br>";
        echo "Adminas3: " . $adminas->createDate . "<br>";
        echo "Adminas4: " . $adminas->lastLogin . "<br>";
        echo "Adminas5: " . $adminas->changeName("1") . "<br>";
        echo "Adminas6: " . $adminas->isLogin() . "<br>";
        echo "Adminas7: " . $adminas->getName() . "<br>";
        echo "Adminas8: " . $adminas->logout() . "<br>";


      ?>

  </body>
</html>
