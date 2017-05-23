<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1> Test- perskaitysime faila</h1>

    <?php
        echo "<h2> Spausdinu su PHP</h2>";

        $prekes = [];
        $i = 0 ;

        //  file - open
        $myfile = fopen("vasara.txt", "r") or die("Unable to open file!");
        // Output one line until end-of-file
        while( feof($myfile) == false) { // feof - found end of file (ar failp pabaiga nerasta)
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
