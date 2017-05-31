<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Testuojam PHP-DB-connection</title>
  </head>
  <body>

      <?php
        echo "<h1> PHP-DB-connection</h1>";

        define ("USERNAME", "edgaras");
        define ("PASSWORD", "rooted");
        define ("SERVERNAME", "localhost");
        define ("DB_NAME", "ligonine4");


        // prisijungiame prie DB
        $connection = mysqli_connect( SERVERNAME, USERNAME, PASSWORD, DB_NAME );

        $sql = "INSERT INTO doctors VALUE ('', 'Karl', 'Tomson');";
        $sql1 ="INSERT INTO pacients (id, name, lname, doctor_id) VALUE ('', 'Just', 'Sem', '1');";

        $arPavykoSQL = mysqli_query ($connection, $sql);

        if ($connection) {
            echo "Sveikinu! Prisijungei prie DB";
        } else {
          echo "ERROR:: ===Prisijungti prie DB nepavyko=== " . mysqli_connect_error();
        }


     ?>

  </body>
</html>
