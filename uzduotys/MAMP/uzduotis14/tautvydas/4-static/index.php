<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
  </head>
  <body>

      <?php
          function testFinal () {
            static  $count = 0;
             $number = 0;
             $count++;
             $number++;
             return "count: $count, number: $number";
          }
          echo testFinal()."<br />";
          echo testFinal()."<br />";
          echo testFinal()."<br />";
          echo testFinal()."<br />";

          // testuojame Recursion
          $number = 0; // globalus kintamasis
          function countNumber($kiekKartuPaleisti) {
              global $number;
              $number += 2; // $number = $number + 2;

              echo "nr: $number  <br />";
              if( $number < $kiekKartuPaleisti) {
                countNumber($kiekKartuPaleisti);
              }
              echo "nr: $number  <br />";  // suveiks tik kai visos f-jos pabaigs darba
          }
          countNumber(100);
          echo $number."<br />";

      ?>

  </body>
</html>
