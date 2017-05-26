<?php

      // ================= Formos duomenu israsymas i DB ========

      $db_username = "makaroon"; // root
      $db_password = "makaronaz67"; // root
      $db_servername = "localhost";
      $db_name = "ligonine4";

      $con  = mysqli_connect($db_servername, $db_username, $db_password, $db_name );

      if(  $con == false ) {
        // echo "Ivyko klaida.  ".mysqli_connect_error();
        die ("ivyko klaida".mysqli_connect_error());
      } else {
        echo "Sekmingai Prisijungta prie duomenu bazes";
      }
      function createPacient($connect, $pName, $pLName, $doct_id) {
          $query = "INSERT INTO pacients
VALUES ('', '$pName', '$pLName', '$doct_id')";

      }


       function insertUser ($connection, $username, $userlname )  {
          $sql = sprintf(
            "INSERT INTO users ( name, lname ) VALUES ('%s', '%s' ) ",

            mysqli_real_escape_string($connection, $userName) ,
            mysqli_real_escape_string($connection, $userlname)
          );

          // idedame i DB
           $arPavykoSQL = mysqli_query($connection, $sql );

           if( $arPavykoSQL ) {
             echo " Pavyko ivykdyti";
           } else {
             echo " Nepavyko ivykdyti!!!";
           }
       }

       insertUser($con, trim($_POST['firstname']), $_POST['lastname'] );


 ?>
