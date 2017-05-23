<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
  </head>
  <body>

      <?php
          echo "<h1>Testuojames Static kintamuosius</h1>";

          function testStatic() {
              static $data = 1;
              $skaicius = 1;

              $data++;
              $skaicius++;

              echo "PO. data: $data   skaicius:  $skaicius   <br>";
          }

          testStatic();
          testStatic();
          testStatic();
          testStatic();

            // ----- testuojame globalius
            $bag = "melyna";  // globalus kintamasis

            // nepakeicia globalaus kintamojo
            function changeBagColor() {
                  $bag = "red";
            }
            // keicia globalu kintamaji
            function changeBagColor2() {
                  global $bag;
                  $bag = "blue";
            }
            function changeBagColor3(&$x) {
                  $x = "black";
            }
            // changeBagColor3($bag);
            // echo "bag color is : $bag   <br />";

            function changeBagColor4 ( ) {
                   return "white";
            }
            // $bag =   changeBagColor4( );
            // echo "bag color is : $bag   <br />";

           function changeBagColor5 ( ) {
                 $GLOBALS["manoBag"] = "red" ;
            }
            changeBagColor5 ( );
            $bag =   $GLOBALS["manoBag"];
              echo $bag;

      ?>

  </body>
</html>
