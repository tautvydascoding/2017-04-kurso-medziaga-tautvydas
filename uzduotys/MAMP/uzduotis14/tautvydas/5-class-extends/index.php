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
                private $name;
                public $kailis = true;
                public $spalva = "#a34baa";
                public function medzioti() {
                  // kazkoks kodas
                }
                private  function iToleta() {
                  // kazkoks kodas
                }
                public function setName($xx) {
                    $this->name = $xx;
                }
                public function getName() {
                    return $this->name;
                }
            }

            $simba = new Liutas();
            $hdaras = new Liutas();
            $lita = new Liutas();

            // uzduotis 1: pakeisti visu triju liutu spalvas (ir pakeitimus atspausdinti)
              // $simba->spalva = "violetine";
              // $hdaras->spalva = "juodas";
              // $lita->spalva = "ruda";
              //
              // echo "Simbos spalva: " . $simba->spalva . " <br />";
              // echo "Hdarro spalva: " . $hdaras->spalva . " <br />";
              // echo "Litos spalva: " . $lita->spalva . " <br />";
              // print_r($simba);  // atspausdina visa obj.

              // uzduotis2: Liuto klasei susikurti privatu kintamaji "Name". ir uskurti 2 funkcijas jo reiksmei pakeisti ir paimti "setName($x)", "getName()".

              $simba->setName("Karolis");
              echo " Simbos vardas: " . $simba->getName() . "<br />";
              $simba->setName("Ana");
              echo " Simbos vardas: " . $simba->getName() . "<br />";

       ?>

  </body>
</html>
