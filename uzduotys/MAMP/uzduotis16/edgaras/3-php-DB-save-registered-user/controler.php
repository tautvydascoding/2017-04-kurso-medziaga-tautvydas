<?php

      // ================= Formos duomenu israsymas i DB ========

      $db_username = "edgaras"; // root
      $db_password = "rooted"; // root
      $db_servername = "localhost";
      $db_name = "ligonine4";

      $connnection  = mysqli_connect($db_servername, $db_username, $db_password, $db_name );

      if(  $connnection == false ) {
        // echo "Ivyko klaida.  ".mysqli_connect_error();
        die ("ivyko klaida".mysqli_connect_error());
      } else {
        echo "Sekmingai Prisijungta prie duomenu bazes";
      }

      function add_pacient($link, $name, $lname, $dr_id) {
        // $pacient = "INSERT INTO pacients (name, lname, doctor_id) VALUE ('$name', '$lname', '$dr_id');";

        // $pacient = sprintf("INSERT INTO pacients (name, lname, doctor_id) VALUE ('%s', '%s', '%s')",
        //             $name,
        //             $lname,
        //             $dr_id
        //           );
        // $pacient = sprintf("INSERT INTO pacients (name, lname, doctor_id) VALUE ('%s', '%s', '%s')",
        //             mysqli_real_escape_string($link, $name),
        //             mysqli_real_escape_string($link, $lname),
        //             mysqli_real_escape_string($link, $dr_id)
        //             );
        $pacient = "INSERT INTO pacients (name, lname, doctor_id)
                    VALUE ('mysqli_real_escape_string($link, $name)',
                          'mysqli_real_escape_string($link, $lname)',
                          'mysqli_real_escape_string($link, $dr_id)';";

        $a = mysqli_query($link, $pacient);
        if ($a) {
          echo "Sveikiname sėkmingai užsiregistravus";
          return $a;
        } else {
          echo "Jums nepavyko užsiregistruoti";
        }
      }


      $name = $_POST['firstname'];
      $lname = $_POST['lastname'];
      $dr_id = $_POST['doc_id'];

      add_pacient($connnection, $name, $lname, $dr_id);






 ?>
