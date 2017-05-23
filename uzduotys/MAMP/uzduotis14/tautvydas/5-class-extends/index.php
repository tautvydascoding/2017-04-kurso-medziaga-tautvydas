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

       class Animal {
         public $alive = true;
         public $positionX = "35";
         public $positionY = "212";
         private $pinigine;
         public function move() {

         }
         public function printText($text) {
           echo $text;
         }
       }
       class AnimalType extends Animal {
         private $tipas = "zinduolis";
         public $kaValgo = "zoleedis";
       }
       class Wolf extends AnimalType {
         private $dantuSkaicius = "24";
         public $vidutinisSvoris = "50";
       }

       $gyvunas = new Animal;
       $vilkas = new AnimalType;
       echo "gyvunas alive: $gyvunas->alive, position: $gyvunas->positionX <br>";
       echo "gyvunas: ".$gyvunas->printText('Valgo valgo...')."  <br>";

        echo "Vilkas  tipas: $vilkas->kaValgo, alive: $vilkas->alive <br>";
        echo "Ar gyvunas zino ka valgo: $gyvunas->kaValgo"; // nepasiekia

        $vilkiukas = new Wolf;
        echo "ar vilkiukas gyvas: ".$vilkiukas->alive;
    ?>
  </body>
</html>
