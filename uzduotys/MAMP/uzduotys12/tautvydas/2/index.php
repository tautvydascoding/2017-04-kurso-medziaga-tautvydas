labas
<?php
    echo  "viso gero <br><br><br>";


    $name = "Tadas";
    $newName  = "Petras";

    echo "Vardas $name <br>";
    $name = $newName;
    echo "Vardas $name <br>";


    $x = "Pakeistas";

    $name = &$x;
    echo "Vardas po (atminties adreso priskyrimo) $name <br>";
    $x = "Dundulis";
    echo "Vardas po (x pakeitimo) $name <br>";


    function skaiciuotiKvadratu($k) {
      $k = $k * $k;
      return $k;
    }
    echo "2 kavadratu: " .  skaiciuotiKvadratu(2) . "<br>"; // "." sujungia stringus

    // pabandymas su atmintiesadresais
    function skaiciuotiKvadratu2(&$k) {
      $k = $k * $k;
    }
    $sk = 3;
    skaiciuotiKvadratu2($sk);
    echo "3 kavadratu:  $sk  <br>"   ; // "." sujungia stringus

 ?>
