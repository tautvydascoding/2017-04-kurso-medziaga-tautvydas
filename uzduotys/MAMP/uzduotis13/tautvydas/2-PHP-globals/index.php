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
            public $brand = "tttt";
            public $name = "X2017";
            private $topSpeed = 150;
            private $isibegejimas = 7;

            public function __construct($x) {
                 $this->brand = $x;
            }
            public function setTopSpeed($x) {
                $this->topSpeed = $x;
            }
            public function getTopSpeed() {
               return  $this->topSpeed;
            }
            public function setGName ($y) {
              global $name; // nuo sios akimirkos dirbus su globaliu knitamuoju
               $name = $y;
            }
            public function setName ($y) {
                $this->name = $y;
            }
        }
        $moto = new Motoroleris("Natalija");
        echo "Motoroleris: $moto->brand    <br>"; // js     moto.brand
        $moto->setTopSpeed(160);
        echo "Moto top speed:" . $moto->getTopSpeed() . "<br>";

          $name = "vardas2";
          echo $name . "<br />";
          $moto->setGName("vardas3");
          echo $name . "<br />";
          echo "MOTOroleris: " . $moto->name . "<br />";








          echo "    <br><br><br><br><br><br><br><br>"; // js




        class Person {
          public $isAlive = true;
          public $aaa = 15;
          public $name = "Tomas";

          // konstruktorius 1 budas
          public function Person ($vardas = "Neturiu" ) {
              $this->name = $vardas;
              echo "<br>".$this->name."<br>";
          }
          // konstruktorius 2  budas
          // public function __construct ($vardas = "Neturiu" ) {
          //   $name = $vardas;
          //     echo "<br>".$name."<br>";
          // }
          public function dance() {
            global $name; // skirtas pasiekti kintamuosius uz klases rimu
            echo "name:  $name";
            return "I'm dancing!";
          }
        }

        $me = new Person("Antonijus" );
        $you = new Person( );

        // var_dump(get_object_vars($me));
        $vardas = $me->name;
        echo "vardas: ".$vardas."<br />";
        $me->name = "Povilas";
        echo "vardas2: ".$vardas."<br />";

        $me->dance();

        $pavarde = "";
        $pavarde = "pakraktauskai";


        $a = 1;
        $b = 2;

        // deklaravus globalisu kintamuosius galima su jais atlikti veiksmus ir keisti ju reiksmes
        function Sum() {
            global $a, $b;
            $b = $a + $b;
        }
        Sum();
        echo $b;

        echo "<br />";

        // saugo visus globalius masyvus ($_SESSION, $_POST) ir musu blobalisu kintamuosisu
        // print_r ($GLOBALS);



      ?>
    </p>
  </body>
</html>
