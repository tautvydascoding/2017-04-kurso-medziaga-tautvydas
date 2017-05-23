<html>
  <head>
    <title>Class and Object Methods</title>
  </head>
  <body>

    <h1> Testuojame PHP OBJ</h1>
    <p>
      <?php
      $name = "uz klases - globalus";
      $lname = "globalus";

      class Motoroleris {
        public $brand = "ttt";
        public $name = "x2017";
        private $topSpeed = 150;
        private $isibegejimas = 7;

        public function __construct ($x = "Natalija") {
            $this->brand = $x;
          }
        public function setTopSpeed ($x){
          $this->topSpeed = $x;
          }
        public function getTopSpeed (){
          return $this->topSpeed;
          }
        public function setGName () {
          global $name; // paskelbiams darbas su globaliu kintamuoju
          $
        }
      }

      $moto = new Motoroleris();
      echo "Motoroleris: " . $moto->brand . "<br><br><br>";

        // $moto->topSpeed = 160;
        // echo "Moto top speed: $moto->topSpeed <br><br><br>";

      $moto->setTopSpeed(160);
      echo "Moto top speed: " . $moto->getTopSpeed() . "<br><br><br>";

      $name = "vardas2";
      echo $name . "<br>";


      ?>

    </p>
  </body>
</html>
