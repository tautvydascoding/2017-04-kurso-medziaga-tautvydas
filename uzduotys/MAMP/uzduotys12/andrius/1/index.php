labas
<?php
echo  "viso geriausio <br>";
$name = "Tadas";
$newName = "Petras";

echo "Vardas $name <br>";
$name = $newName;
echo "Vardas $name <br>";



$x = "Pakeistas";

$name = &$x; //name priskiriama ne x reiksme, o vieta
echo "Vardas po (atminties adreso priskyimo) $name <br>";
$x = "Dundulis";
echo "Vardas po (x pakeitimo) $name <br>";


function skaiciuotiKvadratu($k){
$k = $k * $k;
return $k;
}

echo "2 kvadratu: " . skaiciuotiKvadratu(2) . "<br>"; // "." sujungia stringus

//pabandymas su atminties adresais
function skaiciuotiKvadratu2(&$k){
$k = $k * $k;
}
$sk = 3;
skaiciuotiKvadratu2($sk);
echo "3 kvadratu:  $sk" . "<br>"; // "." sujungia stringus

$myArray = [10]; // sukuria array ir i 0 stalciu ideda reiksme 10
echo "0: " . $myArray[0] . "<br>";

$nArray = array(10); // sukuria array ir i 0 stalciu ideda reiksme 10

print_r($nArray);

define ("MAX_ARTICLES_PER_PAGE", "12"); // konstanta, rasoma is didziosios raides ir niekada nesikeicia
echo "<br> Maksimalus mano home straipsniu sk.:" . MAX_ARTICLES_PER_PAGE. "<br>";

echo "tipas nArray" .  gettype($nArray). "<br>";
 ?>
