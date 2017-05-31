<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<h1> Test - perskaitysime faila</h1>

<?php
// file open
$myfile = fopen("vasara.txt" , "r") or die("Unable to open file!");
// Output one line until end-of-life
while (!feof($myfile) == false) { //feof - found end of file (ar failo pabaiga nerasta)
  echo fgets($myfile) . "<br>";

}
fclose($myfile);


 ?>

  </body>
</html>
