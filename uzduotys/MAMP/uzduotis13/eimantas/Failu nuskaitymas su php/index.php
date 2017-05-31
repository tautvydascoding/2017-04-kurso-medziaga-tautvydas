<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Failu nuskaitymas su php</title>
  </head>
  <body>
      <h1>Test- perskaitysime faila</h1>

    <?php

$prekes = [];
$i = 0;

// file-open
$myfile = fopen("vasara.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) { // tikrina ar nera failo pabaiga (feof - found end of file)
// ! tikrina priesinga reiksme tas pats kas === false
  $failoEilute = fgets($myfile);

  $prekes[$i] = explode("::", $failoEilute);
  $i++;
  echo fgets($myfile) . "<br>";
}
fclose($myfile); //nurodant tokia komanda atlaisvina ramuose vietos, naudos tik kai issikvies
print_r($prekes);
     ?>
  </body>
</html>
