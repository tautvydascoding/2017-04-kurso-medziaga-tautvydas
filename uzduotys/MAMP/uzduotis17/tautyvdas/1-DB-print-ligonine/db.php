<?php


define("SERVERNAME", "localhost");
define("DB_NAME",   "ligonine4");
define( "USERNAME", "tautvydas04"); //root
define("PASSWORD", "tratata");      // root


// prijungia prie DB
function jungtis_DB($sname, $user, $pass, $dbName) {
      $c =  mysqli_connect( $sname, $user, $pass, $dbName );
      // jeigu neprisijunge
      if (!$c) {  // $c == false
          die ("ERROR: nepavyko prisijungti prie DB " . mysqli_connect_error()) ;
      }
      return $c;
}


 ?>
