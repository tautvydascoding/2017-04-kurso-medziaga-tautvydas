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

      //
      // class Gyvunas {
      //   public $alive = true;
      //   public $pasitionX;
      //   public $positionY;
      // }
      //
      // class Tipas extends Gyvunas {
      //   public $rusis = "kate";
      //   public $minta = "mesa";
      // }
      //
      // class Liutas extends Tipas {
      //   private $name = "Tigras";
      //   public $kailis = ture;
      //   public $spalva = "#a34baa";
      //   public function medzioti(){
      //     //kazkoks kodas
      //   }
      //   private function iToleta(){
      //       // kazkoks kodas
      //   }
      //   public function setName($x){
      //     $this->name = $x;
      //   }
      //   public function getName(){
      //     return $this->name;
      //   }
      // }
      //
      //
      // $hdaras = new Liutas();
      // $simba = new Liutas();
      // $lita = new Liutas();

      //pakeisti visu liutu spalvas (pakeitimus isvesti su echo)

      // $simba->spalva = "violetine";
      // $hdaras->spalva = "juodas";
      // $lita->spalva = "rusa";
      //
      // echo "Simbos spalva: ". $simba->spalva ."<br>";
      // echo "Hdaro spalva: ". $hdaras->spalva ."<br>";
      // echo "Litos spalva: ". $lita->spalva ."<br>";

      // print_r($simba);

      //uzduotis: liuto klaseje susikurti kintamaji "name" ir sukurti 2 funcijas jo reiksmei pakeisti ir paimti "setName($x)" "getName()".

      //
      // $simba->setName("Karolis");
      // echo "Simbos vardas: ". $simba->getName(). "<br>";

      //3 uzduotis:
      //1) sukurti dvi klases: User, Admin
      //2) User klase turi kintamuosius : username, password, rights ir funkcija Login($name, $pass)
      //3) Admin klase funkcijas: changeUserName($nm), changeRights($rgt)

      class User {
        public $username = "userX";
        public $password = "passX";
        public $rights = "none";
        public function Login(){
          $name = "userX";
          $pass = "passX";
        }
      }

      class Admin extends User {
        public function changeUserName($newName){
          $this->username = $newName;
        }
        public function changeRights($rights){
          $this->rights = $rights;
        }
      }

      $Adminas = new Admin();

      $Adminas->changeRights("Moderator");
      echo "Naujos teises: ". $Adminas->rights . "<br>";

      $Adminas->changeUserName("Petras");
      echo "Naujas vardas: ". $Adminas->username . "<br>";











      //  class Animal {
      //    public $alive = true;
      //    public $positionX = "35";
      //    public $positionY = "212";
      //    private $pinigine;
      //    public function move() {
       //
      //    }
      //    public function printText($text) {
      //      echo $text;
      //    }
      //  }
      //  class AnimalType extends Animal {
      //    private $tipas = "zinduolis";
      //    public $kaValgo = "zoleedis";
      //  }
      //  class Wolf extends AnimalType {
      //    private $dantuSkaicius = "24";
      //    public $vidutinisSvoris = "50";
      //  }
       //
      //  $gyvunas = new Animal;
      //  $vilkas = new AnimalType;
      //  echo "gyvunas alive: $gyvunas->alive, position: $gyvunas->positionX <br>";
      //  echo "gyvunas: ".$gyvunas->printText('Valgo valgo...')."  <br>";
       //
      //   echo "Vilkas  tipas: $vilkas->kaValgo, alive: $vilkas->alive <br>";
      //   echo "Ar gyvunas zino ka valgo: $gyvunas->kaValgo"; // nepasiekia
       //
      //   $vilkiukas = new Wolf;
      //   echo "ar vilkiukas gyvas: ".$vilkiukas->alive;
    ?>
  </body>
</html>
