<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
  </head>
  <body>

      <?php

        echo "<h1>Testuojama static kintamuosius</h1>";

        function testStatic(){
        static $data = 1;
        $skaicius = 1;

        $data++;
        $skaicius++;
        echo "Po. data: $data  skaicius:  $skaicius<br>";
        }

        testStatic();
        testStatic();
        testStatic();

        // ----------------testuojam globalius

        $bag = "melyna"; // globalus kintamasis

        //nepakeicia globalaus kintamojo
        function changeColor(){
          $bag = "red";
        }

        // keicia globalu kintamaji
        function changeColor2(){
          global $bag;
          $bag = "blue";

        }

        //pakeicia globalu kintamaji
        function changeColor3(&$x){
          $x = "black";
        }

        changeColor3($x);
        echo "bag color is: $x <br>";


      ?>

  </body>
</html>
