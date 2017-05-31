<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    echo "<h1>PHP-DB-connection</h1>";

    define( "USERNAME", "eimantas"); // root // DB - username
    define( "PASSWORD", "eimantas"); // root // DB - password
    define( "DB_NAME", "ligonine4"); // root
    define( "SERVERNAME", "localhost"); // root

    // prisijungimas prie duomenu mazes
    $connection = mysqli_connect( SERVERNAME, USERNAME, PASSWORD, DB_NAME );

    if ($connection) {
      echo "Sveikinu! Prisijungei prie DB";
    } else {
      echo "ERROR:: ===Prisijungti prie DB nepavyko===" . mysqli_connect_error();
    }

    $sql = "INSERT INTO doctors VALUES ('', 'Karl', 'Tomson')";

    $arPavykoSQL = mysqli_query($connection, $sql );

    if( $arPavykoSQL ) {
      echo "  pavyko ivykdyti";
    } else {
      echo " nepavyko ivykdyti!!!";
    }




















      // $db_username = "root"; // root
      // $db_password = "root"; // root
      // $db_servername = "localhost";
      // $db_name = "testtautvydas";
      //
      // $con  = mysqli_connect($db_servername, $db_username, $db_password, $db_name );
      //
      // if(  $con == false ) {
      //   // echo "Ivyko klaida.  ".mysqli_connect_error();
      //   die ("ivyko klaida".mysqli_connect_error());
      // } else {
      //   echo "Sekmingai Prisijungta prie duomenu bazes";
      // }
      //
      // $sql = "INSERT  INTO users ( name, lname, ac) VALUES ('Jurgis', 'Jurgauskas', 312654561) ";
      //
      // $arPavykoSQL = mysqli_query($con, $sql );
      //
      // if( $arPavykoSQL ) {
      //   echo "  pavyko ivykdyti";
      // } else {
      //   echo " nepavyko ivykdyti!!!";
      // }
      //
      //
      //
      //
      //



     ?>

  </body>
</html>
