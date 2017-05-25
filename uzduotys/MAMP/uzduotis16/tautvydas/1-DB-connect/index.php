<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Testuojam PHP-DB-connection</title>
  </head>
  <body>

      <?php
          echo "<h1> PHP-DB-connection</h1>";

          define( "USERNAME", "tautvydas04"  );  // root  // DB - username
          define( "PASSWORD", "tratata"  );     // root   // DB - password
          define( "DB_NAME", "ligonine4"  );
          define( "SERVERNAME", "localhost"  );

          // prisijungiame prie DB
          $connection = mysqli_connect( SERVERNAME, USERNAME, PASSWORD, DB_NAME );

          if ($connection) {
              echo "Sveikinu! Prisijungei prie DB";
          } else {
            echo "ERROR:: ===Prisijungti prie DB nepavyko=== " .  mysqli_connect_error();
          }

          // uzduotis1:
          // ligonines DB-je, sukurti nauja daktara "doctors" lenteleje ("Karl", "Tomson")
          // uzduotis2:
          // sukurti nauja pacienta "Just", "Sem" , priskirta pirmam daktarui

          // $sql = "INSERT INTO doctors VALUES ('', 'Karl', 'Tomson')";

          $arPavykoSQL = mysqli_query($connection, $sql );

          if( $arPavykoSQL ) {
            echo " SQL pavyko ivykdyti";
          } else {
            echo "ERROR:: SQL nepavyko ivykdyti!!!" .  mysqli_connect_error();
          }
       ?>

  </body>
</html>
