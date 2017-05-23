<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test class extensions</title>
  </head>
  <body>


      <?php

            class  Gyvunas   {
              public $alive = true;
              public $positionX;
              public $positionY;

            }

            class Tipas extends Gyvunas {
              public $rusis = "kate";
              public $minta = "mesa";
            }

            class Liutas extends Tipas {
              public $kailis = true;
              public $spalva = "#a34baa";
              public function medzioti() {
                // kazkoks kodas
              }
              private  function iToleta() {
                // kazkoks kodas
              }
            }





       ?>

  </body>
</html>
