<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
  </head>
  <body>

      <?php

          // IDEA: Uzduotis antra: testuojame globalius
          $bag = "mėlina"; //globalus kintamasis

          //nepakeicia globalaus kintamojo
          function changeBagColor() {
            $bag = "red";
          }

          changeBagColor();
          echo "bag color is: $bag <br>";

          //nepakeicia globalaus kintamojo
          function changeBagColor2() {
            global $bag;
            $bag = "red";
          }

          changeBagColor2();
          echo "bag color is: $bag <br>";



          // IDEA: Uzduotis pirma
          echo "<h1>Testuojames Static kintamuosius</h1>";

          function testStatic() {
            static $data = 1;
            $skaicius = 1;

            // echo "Prieš didėjimą . data: $data | skaicius: $skaicius <br>";

            $data++;
            $skaicius++;
            echo "Po didėjimo . data: $data | skaicius: $skaicius <br>";
            }

          testStatic();
          testStatic();
          testStatic();
          testStatic();
      ?>

  </body>
</html>
