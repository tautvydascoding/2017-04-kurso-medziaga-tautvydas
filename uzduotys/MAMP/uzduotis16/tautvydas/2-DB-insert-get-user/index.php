<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <?php
        echo "<h1>PHP-DB- function: INsert, update,select</h1>";

        define("SERVERNAME", "localhost");
        define("DB_NAME",   "ligonine4");
        define( "USERNAME", "tautvydas04"); //root
        define("PASSWORD", "tratata");      // root

        // prijungia prie DB
        function jungtis_DB($sname, $user, $pass, $dbName) {
              $c =  mysqli_connect( $sname, $user, $pass, $dbName );
              // jeigu neprisijunge
              if (!$c) {  // $c == false
                  die ("ERROR: nepavyko prisijungti prie DB " . mysqli_connect_error()) ;
              }
              return $c;
        }
        $connection = jungtis_DB(SERVERNAME, USERNAME, PASSWORD, DB_NAME);


        // uzduotis 1:
        //  sukurti funkcija, kuri i DB ideda daktara
        function createDoctor($con, $name, $lastName) {
             $s = "INSERT INTO doctors VALUES ('', '$name', '$lastName' );";
             $arPavykoSQL = mysqli_query($con, $s);

             if ($arPavykoSQL == false) {
               echo "ERROR: createDoctor() - sukurti daktaro nepavyko:  ";
             }
        }
        // createDoctor($connection, "Bill", "Kolt" );

        // uzduotis 2:  sukurti f-ja, kuri grazina visus daktarus    "getDoctors()"
        function getDoctors($con) {
          $query = "SELECT * FROM doctors";
          $result = mysqli_query($con, $query);

          if( mysqli_num_rows($result) > 0 ) {  // tikriname ar radome kazka pagal uzklausa
              return $result;
          } else {
              echo "Rasta 0 resultatu <br />";
              return null;
          }
        }

        $doctors = getDoctors($connection);

        $eil = mysqli_fetch_assoc($doctors);
        while( $eil) {
          // print_r($eil);
          // echo "<br />";
          echo "Username: " . $eil['name']." Lastname:  ".$eil['lname']."<br>";
          $eil = mysqli_fetch_assoc($doctors);
        }


        // uzduotis 3:  sukurti f-ja, kuri grazina nurodyta daktara  "getDoctor($connect,$id)"

        // uzduotis 4:  sukurti f-ja, kuri pakeicia nurodyto daktaro reiksmes "updateDoctor"
     ?>

  </body>
</html>
