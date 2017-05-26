<?php

      // ================= Formos duomenu israsymas i DB ========

            // uzdavinys:
            // issaugoti paciento duomneis is registracijos formos DB

            
      $db_username = "tautvydas04"; // root
      $db_password = "tratata"; // root
      $db_servername = "localhost";
      $db_name = "ligonine4";

      $connnection  = mysqli_connect($db_servername, $db_username, $db_password, $db_name );

      if(  $connnection == false ) {
        // echo "Ivyko klaida.  ".mysqli_connect_error();
        die ("ivyko klaida".mysqli_connect_error());
      } else {
        echo "Sekmingai Prisijungta prie duomenu bazes <br>";
      }

      function createPacient($connect, $pName, $pLName, $doct_id) {
        // $query = "INSERT INTO pacients
        //           VALUES ('', '$pName', '$pLName', '$doct_id')";
        // $query = sprintf(
        //         "INSERT INTO pacients
        //           VALUES ('', '%s', '%s', '%s')",
        //           $pName,
        //           $pLName,
        //           $doct_id
        //         );
        $query = sprintf(
                "INSERT INTO pacients
                  VALUES ('', '%s', '%s', '%s')",
                  mysqli_real_escape_string($connect, $pName),
                  mysqli_real_escape_string($connect, $pLName),
                  mysqli_real_escape_string($connect, $doct_id)
                );
        // neveikia siuo metu
        // $query =  "INSERT INTO pacients
        //           VALUES ('',
        //             " .  mysqli_real_escape_string($connect, $pName) . ",
        //             " .   mysqli_real_escape_string($connect, $pLName). ",
        //             " .   mysqli_real_escape_string($connect, $doct_id)
        //           .")";

        $arPavyko = mysqli_query($connect, $query);
        if (!$arPavyko) {
          echo "ERROR:: nepavyko sukurti paciento";
        }
      }

      createPacient ($connnection,  $_POST['firstname'],  $_POST['lastname'],  $_POST['doct_id']);


    //  echo  "Last name: " . $_POST['lastname'];
    //  print_r($_POST);



 ?>
