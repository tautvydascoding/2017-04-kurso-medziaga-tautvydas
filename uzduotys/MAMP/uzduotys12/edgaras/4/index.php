<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      echo "<h2>Labas</h2>";
      echo "labas <br>";

      $humans = ["name" => "Tom",
                "lname" => "Okpvol",
                1996, 2, 16];
      print_r($humans);
      echo "<br><br>";

      foreach($humans as $human) {
        echo "Reikšmė: $human <br>";
            }
      echo "<br><br>";


      $article = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

      $words = explode(" ", $article);
      print_r($words);

    ?>
  </body>
</html>
