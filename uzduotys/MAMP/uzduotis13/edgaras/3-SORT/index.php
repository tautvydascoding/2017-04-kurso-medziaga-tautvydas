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
        print_r($arrayPrice);
        echo "<br> <br>";

        $arraylength = count($arrayPrice);
        print_r($arraylength);
        echo "<br> <br>";

        for ($i=1; $i < sizeof($arrayPrice) ; $i++)
          {
            for ($k=0; $k < count($arrayPrice) ; $k++)
            {
              if ($arrayPrice[$k] > $arrayPrice[$i])
              {
                $temp = $arrayPrice[$i];
                $arrayPrice[$i] = $arrayPrice[$k];
                $arrayPrice[$k] = $temp;
              }
            }
          }

        print_r($arrayPrice);
        echo "<br> <br>";

      ?>
    </section>
  </body>
</html>
