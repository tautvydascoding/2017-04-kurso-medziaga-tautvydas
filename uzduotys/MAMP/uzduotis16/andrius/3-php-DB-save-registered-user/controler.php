<?php

      // ================= Formos duomenu israsymas i DB ========

      $db_username = "andriusk"; // root
      $db_password = "blablabla"; // root
      $db_servername = "localhost";
      $db_name = "ligonine4";

      $connection  = mysqli_connect($db_servername, $db_username, $db_password, $db_name );

      if(  $connection == false ) {
        // echo "Ivyko klaida.  ".mysqli_connect_error();
        die ("ivyko klaida".mysqli_connect_error());
      } else {
        echo "Sekmingai Prisijungta prie duomenu bazes";
      }

function inserPacient($connect, $pName, $pLName, $pDoctor_id) {
  $query = sprintf(
    "INSERT INTO pacients
    VALUES ('', '%s', '%s', '%s')",
    $pName,
    $pLName,
    $pDoctor_id
  );
  // $query = sprintf(
  //         "INSERT INTO pacients
  //           VALUES ('', '%s', '%s', '%s')",
  //           mysqli_real_escape_string($connect, $pName),
  //           mysqli_real_escape_string($connect, $pLName),
  //           mysqli_real_escape_string($connect, $pDoctor_id)
  //         );
  //====zemiau isvardintas kazkodel neveikia
  // $query =  "INSERT INTO pacients
  //           VALUES ('',
  //             mysqli_real_escape_string($connect, $pName),
  //             mysqli_real_escape_string($connect, $pLName),
  //             mysqli_real_escape_string($connect, $pDoctor_id)
  //           )";

  $result = mysqli_query ($connect, $query);
  if ($result == false) {
    echo "ERROR:: Sukurti naujo pasiento nepavyko";
  }
}
inserPacient($connection, $_POST['firstname'], $_POST['lastname'], $_POST['doctor_id'])

// uzadvinys:
// issaugoti paciento duomenis is registracijos formos  paciento DB

// echo "Last name: " . $_POST['lastname'];
// print_r($_POST);




 ?>
