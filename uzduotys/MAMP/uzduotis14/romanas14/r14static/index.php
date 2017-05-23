<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bandom STATIC</title>
  </head>
  <body>

<?php

echo "<h2>testuojam STATIC PHP</h2>";


function teststatic() {
static $data=1;
$skaicius=1;

// echo "PRIES data: $data skaicius: $skaicius <br><br> ";

$data++;
$skaicius++;
echo " PO data: $data skaicius: $skaicius <br>";

}
teststatic();
teststatic();
teststatic();
teststatic();

//============= testuojam GLOBAL ==============

$bag="melyna"; //globalus kint

function changeBagColor () {  //sita f nepakeicia globalaus
$bag="red";
}
changeBagColor();
echo "F2.bag color is: $bag <br/>";


function changeBagColor2 () { // keicia globalu nes suranda ji
global $bag;
$bag="red";
}
changeBagColor2();
echo "F2.bag color is: $bag <br/>";


function changeBagColor3 (&$x) {  //
$x="black";
}
changeBagColor3($bag);
echo "F3. bag color is: $bag <br/>";


function changeBagColor4 () {
return "white";
}
changeBagColor4();
echo "F4. bag color is: $bag <br/>";


function changeBagColor5 () {
  $GLOBALS["manobag"]="yellow";
}
changeBagColor5 ();
$bag = $GLOBALS["manobag"];
echo "F5.  $bag";


 ?>






  </body>
</html>
