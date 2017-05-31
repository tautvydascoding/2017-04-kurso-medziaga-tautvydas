<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <h1>Testuojam PHP - SQL</h1>

    <?php

      $db_username = "root"; // root
      $db_password = "root"; // root
      $db_servername = "localhost";
      $db_name = "testtautvydas";

      $con  = mysqli_connect($db_servername, $db_username, $db_password, $db_name );

      if(  $con == false ) {
        // echo "Ivyko klaida.  ".mysqli_connect_error();
        die ("ivyko klaida".mysqli_connect_error());
      } else {
        echo "Sekmingai Prisijungta prie duomenu bazes";
      }


       function insertUser ($connection, $username, $userlname, $pass, $ac )  {

          $sql = sprintf(
            "INSERT INTO users ( name, lname, password, ac) VALUES ('%s', '%s', '%s', '%s') ",

            mysqli_real_escape_string($connection, $username),
            mysqli_real_escape_string($connection, $userlname),
            md5($pass),
            mysqli_real_escape_string($connection, $ac)
          );

          // idedame i DB
           $arPavykoSQL = mysqli_query($connection, $sql );

           if( $arPavykoSQL ) {
             echo " Pavyko ivykdyti";
           } else {
             echo " Nepavyko ivykdyti!!!";
           }
       }
      //  insertUser($con, "Kaleda", "Perrauskutis", "aaa123", 3312477713);

      function getUsers ($connection) {
        $sql = "SELECT * FROM users" ;
        // vykdome uzklausa
        $result = mysqli_query($connection, $sql);
        if( !$result ) {
          echo " Nepavyko gauti visus vartotjus!!! <br />";
        }

        if( mysqli_num_rows($result) > 0 ) {
            // suskaldysime result'atus eilutemis ir issivesime visus is ekrana

            while( $eil = mysqli_fetch_assoc($result)) {
              print_r($eil);
              echo "<br />";
              // echo "Username: ".$eil['name']." Lastname:  ".$eil['lname']."<br>";
            }
        } else {
            echo "Rasta 0 resultatu <br />";
        }
      }
      // getUsers($con);
      function getUser ($con, $id) {
        $sql = sprintf(
                "SELECT * FROM users
                  WHERE users.id = '%s' ",
                  mysqli_escape_string($con, $id)
               );
        $result = mysqli_query($con, $sql);
        if( $result ) {
          $user = mysqli_fetch_assoc($result);
          print_r($user);
        } else {
          echo "Vartotojas nerastas!!!";
        }
      }
        getUser($con, 2);










     ?>

  </body>
</html>
