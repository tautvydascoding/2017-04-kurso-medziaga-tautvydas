<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      echo "<h2>Labas</h2>";
      echo "labas";

      $humans = ["name" => "Tom",
                "lname" => "Okpvol",
                1996, 2, 16];
      print_r($humans);

      foreach($humans as $humans) {
        echo "Reikšmė: " . $human "<br />";
      };
    ?>
  </body>
</html>
