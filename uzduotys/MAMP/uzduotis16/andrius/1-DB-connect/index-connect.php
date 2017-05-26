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

      $sql = "INSERT  INTO users ( name, lname, ac) VALUES ('Jurgis', 'Jurgauskas', 312654561) ";

      $arPavykoSQL = mysqli_query($con, $sql );

      if( $arPavykoSQL ) {
        echo "  pavyko ivykdyti";
      } else {
        echo " nepavyko ivykdyti!!!";
      }








     ?>

  </body>
</html>
