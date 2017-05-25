<?php

      // ================= Formos duomenu israsymas i DB ========

      $db_username = "root"; // root
      $db_password = "root"; // root
      $db_servername = "localhost";
      $db_name = "testtautvydas";

      $connnection  = mysqli_connect($db_servername, $db_username, $db_password, $db_name );

      if(  $connnection == false ) {
        // echo "Ivyko klaida.  ".mysqli_connect_error();
        die ("ivyko klaida".mysqli_connect_error());
      } else {
        echo "Sekmingai Prisijungta prie duomenu bazes";
      }


        



 ?>
