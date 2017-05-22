<html>
  <head>
    <title>Class and Object Methods</title>
  </head>
  <body>

    <h1> Testuojame PHP OBJ</h1>
    <p>
      <?php
        $name = "uz klases - globalus";

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
