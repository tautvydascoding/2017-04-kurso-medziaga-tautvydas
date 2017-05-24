<!DOCTYPE html>
<html>
  <?php $title = "Testuosime PHP class inheritance"; ?>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
  </head>
  <body>
    <h1> <?php echo $title; ?>    </h1>

    <?php
      //uzduotis 3:
      //1) sukurti dvi klases: user, admin
      //2) user klase turi kintamuosius: username, password, rights ir funkciją login($name, $pass);
      //3) admin klase funkcijas: changeUserName($nm), changeRights($rgt);

      class user {
        public $username = "";
        public $password = "";
        public $rights = "";
        public function login($x, $y) {
          //kodas
        }
      }

      class admin extends user {
        public function changeUserName($x) {
          $this->username = $x;
        }
        public function getUserName() {
          return $this->username;
        }
        public function changeRights($x) {
          $this->rights = $x;
        }
        public function getRights() {
          return $this->rights;
        }
      }

      $useris = new user;

      $useris->username = "Tomas";
      echo "Useris username: $useris->username <br>";
      print_r($useris);
      echo "<br>";

      $useris->rights = "all-rights";
      echo "Useris rights: $useris->rights <br>";
      print_r($useris);
      echo "<br>";
      echo "<br>--------------------------<br>";

      $adminas = new admin;

      $adminas->changeUserName("namas");
      echo "Adminas username: " . $adminas->getUserName() .  "<br>";
      print_r($adminas);
      echo "<br>";

      $adminas->changeRights("read-only");
      echo "Adminas rights: " . $adminas->getRights() . "<br>";
      print_r($adminas);
      echo "<br>";
      echo "<br>--------------------------<br>";

      // sukurti Liūto klasei privatų kintamąjį  "name" ir sukurti jam dvi funkcijas jo reikšmei gauti ir pakeisti.

      class Gyvunas {
        public $alive = true;
        public $positionX;
        public $positionY;
      }

      class Tipas extends Gyvunas {
        public $rusis = "katė";
        public $minta = "mėsa";
      }

      class Liutas extends Tipas {
        private $name = "nezinomas";
        public $kailis = true;
        public $spalva = "#a34baa";
        public function medzioti() {
          //kažkoks kodas
        }
        private function iToleta() {
          //kažkoks kodas
        }
        public function setName ($x) {
          $this->name = $x;
        }
        public function getName () {
          return $this->name;
        }
      }

      $simba = new Liutas();
      $hdaras = new Liutas();
      $lita = new Liutas();

      //Pakeisti visų liūtų spalvą--------------------------
      $simba->spalva = "yellow";
      echo "Simba: $simba->spalva <br>";
      print_r($simba);
      echo "<br>";

      $hdaras->spalva = "brown";
      echo "Hdaras: $hdaras->spalva <br>";
      print_r($hdaras);
      echo "<br>";

      $lita->spalva = "red";
      echo "Lita: $lita->spalva <br>";
      print_r($lita);
      echo "<br>";
      echo "<br>--------------------------<br>";


      $simba->setName("tadas");
      echo "Simbos vardas: " . $simba->getName() . "<br>";
      $simba->setName("brutas");
      echo "Simbos vardas: " . $simba->getName() . "<br>";
      $simba->setName("Smikis");
      echo "Simbos vardas: " . $simba->getName() . "<br>";
      $simba->setName("Simba");
      echo "Simbos vardas: " . $simba->getName() . "<br>";


    ?>
  </body>
</html>
