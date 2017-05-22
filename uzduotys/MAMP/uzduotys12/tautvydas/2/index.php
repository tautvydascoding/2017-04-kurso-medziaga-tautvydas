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

$myArray =  [10];  // i "0" stalciu idedama skaicius "10"
    echo "0: " . $myArray[0];

    $nArray =   array(10); // i "0" stalciu idedama skaicius "10"
    print_r($nArray);

    define ("MAX_ARTICLES_PER_PAGE", "10");

    echo "Maksimalsu mano home straipnsiu sk.: " . MAX_ARTICLES_PER_PAGE . "  <br>";

    echo "tipas nArray " . gettype($nArray ). "  <br>" ;

 ?>
