Labas

<?php

  echo "<br><br>Hello World <br><br>";

  $name = "Tadas";
  $newName = "Petras";

  echo "Vardas $name <br>";
  $name = $newName;
  echo "Vardas $name <br>";

  $x = "Pakeistas";

  $name = $x;
  echo "Vardas po (atminties adreso priskyrimo) $name <br>";
  $x = "Dundulis";
  $name = $x;
  echo "Vardas po (x pakeitimo) $name <br>";


  $name = &$x;
  echo "Vardas po (atminties adreso priskyrimo) $name <br>";
  $x = "akmuo";
  echo "Vardas po (x pakeitimo) $name <br>";

  function skaiciuotiKvadratu($k) {
      $k = $k * $k;
      return $k;
    }
      // IDEA: " . " sujungia stringus
  echo "2 kvadratu: " . skaiciuotiKvadratu(2);

  function skaiciuotiKvadratu2(&$k) {
    $k = $k * $k;
  }

  $k = 3;
  skaiciuotiKvadratu2($k);

  echo "<br> 3 kvadratu: $k <br>";

  $myArray = null;
  $myArray = [10];
  echo "0: " . $myArray[0] . "<br>";
  print_r($myArray);
  $nArray = array(10);

  define("MAX_ARTICLES_PER_PAGE", "12");
  echo "<br> Maksimalus mano straipsniu skaicius: " . MAX_ARTICLES_PER_PAGE;

  echo "Tipas ";


?>
