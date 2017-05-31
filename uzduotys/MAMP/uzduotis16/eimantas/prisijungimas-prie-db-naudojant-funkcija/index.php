<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



    <?php

    echo "<h1>Testuojam PHP - SQL</h1>";


        define("SERVERNAME", "localhost");
        define("DB_NAME", "ligonine4");
        define("USERNAME", "eimantas");
        define("PASSWORD", "eimantas");

        //funkcija kuri prijungia prie duomenu bazes


        function jungtis_DB($sname, $user, $pass, $dbName){
          $c = mysqli_connect($sname, $user, $pass, $dbName);
          //jeigu neprisijungia
          if (!$c){
            die("ERROR: nepavyko prisijungti prie DB" . mysqli_connect_error());
          } // jeigu $c == false
          return $c;
        }

        $connection = jungtis_DB(SERVERNAME, USERNAME, PASSWORD, DB_NAME);

        //uzduotis: susikurti funkcija, kuri ideda i duomenu baze daktara

        // function createDoctor($con, $name, $lastName){
        //   $sql = "INSERT INTO doctors VALUES ('', '$name', '$lastName')";
        //   $arPavykoSQL = mysqli_query($con, $sql);
        //   if ($arPavykoSQL == false) {
            // echo "ERROR: createDoctor() - sukurti daktaro nepavyko: $s";
        //   }
        // }
        //
        // createDoctor($connection, 'Bill', 'Kolt');


        //uzduotis 2: sukurti f-ja, kuri grazina visus daktarus "getDoctors()"
        //uzduotis 3: sukurti f-ja, kuri grazina nurodyta daktara "getDoctor($id)"
        //uzduotis 4: sukurti f-ja, kuri pakeicia nurodyto daktaro reiksmes "updateDoctor"




        //========== 2 f-ja, kuri grazina visus daktarus "getDoctors()=========================

        // function getDoctors($con){
        //
        //   $query = "SELECT * FROM doctors";
        //   $result = mysqli_query($con, $query);
        //
        //   if (mysqli_num_rows($result) > 0) { //tikrinoma ar radome kazka pagal uzklausa
        //     return $result;
        //
        //   } else {
        //     echo "0 results";
        //     return null;
        //   }
        // }
        // $doctors = getDoctors($connection); // butina prisilygint gautus getDoctors() rezultatus kazkam, siuo atveju $doctors Tam, kad tuos duomenis kazkur issisaugotu.
        //
        // $eil = mysqli_fetch_assoc($doctors); // mysqli_fetch_assoc  paima visus gautus daktarus ir priskiria eilutei po viena
        // while ($eil){
        //   echo "id: " . $eil["id"]. " - Name: " . $eil["name"]. " - LastName: " . $eil["lname"]. "<br>";
        //   $eil = mysqli_fetch_assoc($doctors); // butina pasirasyti, kad nebeisvestu jau gauto daktaro, o imtu kita panasiai kaip i++
        // }


      //uzduotis 4: sukurti f-ja, kuri pakeicia nurodyto daktaro reiksmes "updateDoctor"

      // function updateDoctor($con, $name, $lname, $id){
      //   $DBuzklausa = "UPDATE doctors SET name='$name', lname='$lname' WHERE id='$id'";
      //
      //   if (mysqli_query($con, $DBuzklausa)) {
      //     echo "Naujas vardas: " . $name . " " . "Pavarde: " . $lname;
      //     }
      //   }
      //
      //   updateDoctor($connection, 'Anita', 'Annkinson', '15');



        //uzduotis 3: sukurti f-ja, kuri grazina nurodyta daktara "getDoctor($id)"

        function getDoctor($con, $id){
          $doctorID = "SELECT * FROM doctors WHERE id = '$id'";
          $result = mysqli_query($con, $doctorID);

          if ($result == false){
            echo "ERROR: tokio daktaro nera";
          }
          return $result;
          }

          $doctor = getDoctor($connection, 15);

          $doc = mysqli_fetch_assoc($doctor);
          echo "Id: " . $doc["id"]. " - Name: " . $doc["name"]. " - LastName: " . $doc["lname"]. "<br>";















// antras prisijungimo budas

      // $db_username = "eimantas"; // root
      // $db_password = "eimantas"; // root
      // $db_servername = "localhost";
      // $db_name = "ligonine4";
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
      //  function insertUser ($connection, $username, $userlname, $pass, $ac )  {
       //
      //     $sql = sprintf(
      //       "INSERT INTO users ( name, lname, password, ac) VALUES ('%s', '%s', '%s', '%s') ",
       //
      //       mysqli_real_escape_string($connection, $username),
      //       mysqli_real_escape_string($connection, $userlname),
      //       md5($pass),
      //       mysqli_real_escape_string($connection, $ac)
      //     );
       //
      //     // idedame i DB
      //      $arPavykoSQL = mysqli_query($connection, $sql );
       //
      //      if( $arPavykoSQL ) {
      //        echo " Pavyko ivykdyti";
      //      } else {
      //        echo " Nepavyko ivykdyti!!!";
      //      }
      //  }
      //  insertUser($con, "Kaleda", "Perrauskutis", "aaa123", 3312477713);

      // function getUsers ($connection) {
      //   $sql = "SELECT * FROM users" ;
      //   // vykdome uzklausa
      //   $result = mysqli_query($connection, $sql);
      //   if( !$result ) {
      //     echo " Nepavyko gauti visus vartotjus!!! <br />";
      //   }
      //
      //   if( mysqli_num_rows($result) > 0 ) {
      //       // suskaldysime result'atus eilutemis ir issivesime visus is ekrana
      //
      //       while( $eil = mysqli_fetch_assoc($result)) {
      //         print_r($eil);
      //         echo "<br />";
      //         // echo "Username: ".$eil['name']." Lastname:  ".$eil['lname']."<br>";
      //       }
      //   } else {
      //       echo "Rasta 0 resultatu <br />";
      //   }
      // }
      // // getUsers($con);
      // function getUser ($con, $id) {
      //   $sql = sprintf(
      //           "SELECT * FROM users
      //             WHERE users.id = '%s' ",
      //             mysqli_escape_string($con, $id)
      //          );
      //   $result = mysqli_query($con, $sql);
      //   if( $result ) {
      //     $user = mysqli_fetch_assoc($result);
      //     print_r($user);
      //   } else {
      //     echo "Vartotojas nerastas!!!";
      //   }
      // }
      //   getUser($con, 2);










     ?>

  </body>
</html>
