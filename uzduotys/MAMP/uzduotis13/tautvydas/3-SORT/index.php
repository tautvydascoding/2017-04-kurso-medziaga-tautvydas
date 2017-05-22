<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Testuojam PHP rikevimo algoritma</title>
  </head>
  <body>
    <section>
      <h1> <?php echo "Testuojam PHP rikevimo algoritma"; ?> </h1>



      <?php
          $arrayPrice = [213, 12, 1, 31, 645, 165, 213, 534, 1, 4, 1, 132, 6, 3, 35];

          print_r ($arrayPrice);
          // Boble rikevimo algoritmas
          // for ( $i = 0; $i < sizeOf($arrayPrice); $i++) {
          //     for ( $k = 0; $k < sizeOf($arrayPrice) - 1; $k++) {
          //           if ( $arrayPrice[$k] > $arrayPrice[$k + 1] ) {
          //             $previous =  $arrayPrice[$k];
          //             $arrayPrice[$k] = $arrayPrice[$k + 1]; // 213 -> 12
          //             $arrayPrice[$k + 1] = $previous;    // 12 -> 213
          //           }
          //          // pabandyti ta pati funkcijoje su &
          //     }
          // }


          function swapArrayElements (  &$array,  $curent, $secend ) {
              $previous =  $array[$curent];  // 213
              $array[$curent] = $array[$secend]; // 213 -> 12
              $array[$secend] = $previous;    // 12 -> 213 
          }
          for ( $i = 0; $i < sizeOf($arrayPrice); $i++) {
              for ( $k = 0; $k < sizeOf($arrayPrice) - 1; $k++) {
                    if ( $arrayPrice[$k] < $arrayPrice[$k + 1] ) {
                        swapArrayElements ( $arrayPrice,  $k, $k + 1);
                    }
              }
          }
          echo "<br /><br />";
          print_r ($arrayPrice);



       ?>





    </section>
  </body>
</html>
