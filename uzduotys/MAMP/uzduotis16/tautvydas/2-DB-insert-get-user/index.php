<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <?php
        echo "<h1>PHP-DB- function: INsert, update,select</h1>";

        define("SERVERNAME", "localhost");
        define("DB_NAME",   "ligonine4");
        define( "USERNAME", "tautvydas04--"); //root
        define("PASSWORD", "tratata");      // root

        // prijungia prie DB
        function jungtis_DB($sname, $user, $pass, $dbName) {
              $c =  mysqli_connect( $sname, $user, $pass, $dbName );
              // jeigu neprisijunge
              if (!$c) {  // $c == false
                  die ("ERROR: nepavyko prisijungti prie DB " . mysqli_connect_error()) ;
                  echo " bandau isvesti";
              }
              return $c;
        }
        $connection = jungtis_DB(SERVERNAME, USERNAME, PASSWORD, DB_NAME);

        echo 'visdar bandau';

        // uzduotis 1:
        //  sukurti funkcija, kuri i DB ideda daktara
        
     ?>

  </body>
</html>
