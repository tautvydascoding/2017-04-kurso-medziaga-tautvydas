<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Testuojam PHP-DB connection</title>
  </head>
  <body>
    <?php
      echo "<h1>Testuojam PHP-DB connection</h1>";
      // sukurem kintamuosius konstantas
      define( "USERNAME", "andriusk" ); // root // DB - username
      define( "PASSWORD", "blablabla" ); // root //DB- password
      define( "DB_NAME", "ligonine4" );
      define( "SERVERNAME", "localhost" );

      // prisijungimas prie DB
      $connection = mysqli_connect ( SERVERNAME, USERNAME, PASSWORD, DB_NAME ); // sukurem conect funkcija

      if ($connection) {
        echo "Sveikinu, Prisijungei prie DB";
      } else {
        echo "ERROR:: ===Prisijungti prie DB nepavyko===" . mysqli_connect_error();
      }

// 1 uzduotis:
    // ligonines DB-je, sukurti nauja daktara "doctors" lenteleje- ("Karl", "Tomson")
// 2 uzduotis
    // ligonines DB-je sukurt nauja pacienta "pacients" lenteleje- "Just", "Sam", priskirta pirmam daktarui


      // $sql = "INSERT INTO doctors VALUES ('', 'Karl', 'Tomson');"; // 1 uzduotis sukuria daktara
      // $sql = "INSERT INTO pacients (id, name, lname, doctor_id) VALUES ('', 'Just', 'Sam', '1');"; // 2 uzduotis sukuria pacienta pirmi () nurodo i kuri stulpeli, ka deti

      $arPavykoSQL = mysqli_query($connection, $sql ); // mysql_query atlieka sql veiksmus (kurie aprasyti $sql kintamajam)

      if ($arPavykoSQL) {
        echo " SQL pavyko ivykdyti";
      } else {
        echo "ERROR:: SQL nepavyko ivykdyti!!!" . mysqli_connect_error();
      }



    ?>




  </body>
</html>
