<?php

      // ================= Formos duomenu israsymas i DB ========

      $db_username = "root"; // root
      $db_password = "root"; // root
      $db_servername = "localhost";
      $db_name = "hospital4";

      $connnection  = mysqli_connect($db_servername, $db_username, $db_password, $db_name );

      if(  $connnection == false ) {
        // echo "Ivyko klaida.  ".mysqli_connect_error();
        die ("ivyko klaida".mysqli_connect_error());
      } else {
        echo "Sekmingai Prisijungta prie duomenu bazes";
      }



// uzdavinys:
// issaugoti paciento duomenis is registracinos formos DB
// echo "Last name: " . $_POST['lastname'];
// print_r($_POST);

function insertPacient ($connection, $name, $lname, $doctor_id) {
$query = sprintf("INSERT INTO pacients
VALUES ('', '%s', '%s', '%s')",
@name,
@lname,
@doctor_id
);
$arPavyko = mysqli_query($connection, $query);
if (!$arPavyko) {
  echo "ERROR:: nepavyko sukurti paciento";
}
}
insertPacient ($connection, $_POST['firstname'], $_POST['lname'],
$_POST['doctor_id']);


 ?>
