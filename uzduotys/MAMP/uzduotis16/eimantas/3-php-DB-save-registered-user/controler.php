<?php

      // ================= Formos duomenu israsymas i DB ========

      $db_username = "eimantas"; // root
      $db_password = "eimantas"; // root
      $db_servername = "localhost";
      $db_name = "ligonine4";



      $con  = mysqli_connect($db_servername, $db_username, $db_password, $db_name );

      if(  $con == false ) {
        // echo "Ivyko klaida.  ".mysqli_connect_error();
        die ("ivyko klaida".mysqli_connect_error());
      } else {
        echo "Sekmingai Prisijungta prie duomenu bazes";
      }


      //issisaugoti duomenis is registracijos i paciento lentele

      global $con; //connection

      $name = $_POST['firstname'];
      $lName = $_POST['lastname'];
      $doctor_id = $_POST['doctor_id'];



      function insertPacient($con, $vardas, $pavarde, $daktaroNr){
        $query = "INSERT INTO pacients VALUES ('','$vardas', '$pavarde', '$daktaroNr')";
        $arPavykoSQL = mysqli_query($con, $query);
        if ($arPavykoSQL){
          echo "Pavyko";
        } else {
          echo "Nepavyko";
        }
      }

      insertPacient($con, $name, $lName, $doctor_id);








































 //       function insertUser ($connection, $username, $userlname )  {
 //          $sql = sprintf(
 //            "INSERT INTO users ( name, lname ) VALUES ('%s', '%s' ) ",
 //
 //            mysqli_real_escape_string($connection, $username) ,
 //            mysqli_real_escape_string($connection, $userlname)
 //          );
 //
 //          // idedame i DB
 //           $arPavykoSQL = mysqli_query($connection, $sql );
 //
 //           if( $arPavykoSQL ) {
 //             echo " Pavyko ivykdyti";
 //           } else {
 //             echo " Nepavyko ivykdyti!!!";
 //           }
 //       }
 //
 //       insertUser($con, trim($_POST['firstname']), $_POST['lastname'] );
 //
 //
 // ?>
