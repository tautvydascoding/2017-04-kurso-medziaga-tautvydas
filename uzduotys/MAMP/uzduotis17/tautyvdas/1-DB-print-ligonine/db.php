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

    function getDoctors($con) {
      $query = "SELECT * FROM doctors
              ORDER BY name, lname ASC";
      $result = mysqli_query($con, $query);

      if( mysqli_num_rows($result) > 0 ) {  // tikriname ar radome kazka pagal uzklausa
          return $result;
      } else {
          echo "Rasta 0 resultatu <br />";
          return null;
      }
    }

    // uzduotis 17.1:
    // sukurti funkcija, kuri grazina visus nurodyto gydytojo(by id) pacientus
    function getPacientsByDoctorID($connet, $doct_id) {
      $query = "SELECT * FROM pacients
                WHERE pacients.doctor_id =  '$doct_id'
                ORDER BY pacients.name ASC";
      $result = mysqli_query($connet, $query);
      if (!$result) {
          // echo "ERROR:: Pacinetu nerasta";
      }
      return $result;
    }

 ?>
