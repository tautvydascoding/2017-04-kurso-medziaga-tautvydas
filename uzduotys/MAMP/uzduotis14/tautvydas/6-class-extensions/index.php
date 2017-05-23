<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test</title>
  </head>
  <body>
    <h1>abstract class && Interface</h1>

    <?php

      interface Human {
        public function getName( ) ;
        public function getPersonalCode() ;
      }
      class Man implements Human {
        private $name = "Test";
        private $testosterone = 3232;
        public function snore() {
        }
        public function getName() {
          return $this->name;
        }
        // mes kalida nes Overloding neveikia PHP
        // public function getName($aa) {
        // }
        public function setName($text) {
          $this->name = $text;
        }
        public function getPersonalCode() {}
      }
      $juozas = new Man;
      echo $juozas->getName()."<br />";
      $juozas->setName("Juozas");
      echo $juozas->getName()."<br />";


      abstract class HumanType {
        public $skinType;
        private $religion;
        abstract function getSpeed($asaa) ;
      }
      class Woman extends HumanType {
        public $skinType = "#f25631";
        private $estrogenai = 31654;
        function getSpeed($text) {
          // kazkoks kodas
        }
      public function gimdymas() {
          $this->sumazintiEstro();
          echo "sumazino Estrog.";
        }
        private function sumazintiEstro() {
          $this->estrogenai -= 10;
        }
        private function padidintiEstro() {
            $this->estrogenai =  $this->estrogenai + 10;
        }
      }
      class Test extends Woman {
        public function gimdymas() {
          echo "isvaziuoju";
        }
      }
      $test = new Test;
      $test->gimdymas()."<br />";

      $Marija = new Woman;
      $Marija->gimdymas();
      // $Marija->sumazintiEstro(); // privaciu funkciju neiseina issaukti!


      


     ?>

  </body>
</html>
