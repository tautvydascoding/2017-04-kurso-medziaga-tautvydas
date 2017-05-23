<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Test - perskaitysime failą</h1>
    <?php
      echo "<h2>Spausdinam su php</h2>";



      $prekes = [];
      $i = 0;

      $myfile = fopen("prekes.txt", "r") or die("Unable to open file!");

      while(!feof($myfile)) {
        $a = &$i;
        $failoeilute = fgets($myfile);
        $prekes[$a] = explode("::", $failoeilute);
        echo fgets($myfile) . "<br>";
        $i++;
        }
      fclose($myfile);
      print_r($prekes);





      // // Output one line until end-of-file
      // // IDEA: tikrina ar yra paskutinė dokumento eilutė feof - (find end of file) ! - (== false).
      // while(!feof($myfile)) {
      //   $failoeilute = fgets($myfile);
      //   // IDEA: isvedama dokumento eilutė.
      //   echo fgets($myfile) . "<br>";
      //   }
      // fclose($myfile);
    ?>
  </body>
</html>
