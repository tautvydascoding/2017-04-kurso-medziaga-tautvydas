<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test class and OBJ</title>
  </head>
  <body>

      <?php
          $title = "Test class and OBJ";
          echo "<h1>".$title."</h1>";


          class human {
            private $name = "";
              private $namel = "";

            public function setName ($n) {
               $this->name = $n;
            }
            public  function getName () {
              return $this->name;
            }
          }
          $man = new human; // kuriame OBJ 
          // $man->name = "Kastytis K.";  // neveikai, nes bandome pasiekti private kintamaji
          // echo $man->getName();
          $man->setName("Timis");
          echo $man->getName()."<br />";
          $man->setName("Arnold");
          echo $man->getName()."<br />";

        ?>



  </body>
</html>
