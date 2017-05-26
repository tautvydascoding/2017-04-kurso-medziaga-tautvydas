<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>testas0</title>
  </head>
  <body>
<h1>Test- perskaitysime faila</h1>


<?php
echo "<h2> Spausdinsiu su PHP </h2>";


$prekes = [];
$i = 0;
// foopen - file-open (atidaro faila)
$myfile = fopen("vasara.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(feof($myfile) == false) { // feof- found end of file (ar failo pabaiga nerasta- ==false) cia su false
// while(!feof($myfile)) { // feof- found end of file (ar failo pabaiga nerasta !) cia su sauktuku (daro lygiai ta pati ka false)
$failoEilute = fgets($myfile);

$prekes[$i] = explode("::", $failoEilute);
$i++;
echo fgets($myfile) . "<br>";
}
fclose($myfile);

print_r($prekes);





 ?>


  </body>
</html>
