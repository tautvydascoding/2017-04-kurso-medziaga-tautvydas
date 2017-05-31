<?php


define("SERVERNAME", "localhost");
define("DB_NAME",   "ligonine4");
define( "USERNAME", "makaroon"); //root
define("PASSWORD", "makaronaz67");      // root


// prijungia prie DB
function jungtis_DB($sname, $user, $pass, $dbName) {
      $c =  mysqli_connect( $sname, $user, $pass, $dbName );
      // jeigu neprisijunge
      if (!$c) {  // $c == false
          die ("ERROR: nepavyko prisijungti prie DB " . mysqli_connect_error()) ;
      }
      return $c;
}

// uzduotis 2:  sukurti f-ja, kuri grazina visus daktarus    "getDoctors()"
//function getDoctors($con) {
//  $query = "SELECT * FROM doctors
//          ORDER BY name, lname ASC";
//  $result = mysqli_query($con, $query);
//
// if( mysqli_num_rows($result) > 0 ) {  // tikriname ar radome kazka pagal uzklausa
//     return $result;
// } else {
//     echo "Rasta 0 resultatu <br />";
//      return null;
//  }
//}


//uzduotis 17.1:
//sukurti funkcija, kuri grazina visus nurodyto gydytojo (by id) pacientus

function getPacientsByDoctorID() {
    $query = "SELECT * FROM pacients
WHERE pacients.doctor_id = doctors.id
ORDER BY pacients.name ASC ";
    $result = mysqli_query($link, $query);
    if ( !$result) {
        //echo "ERROR:: Pacientu nerasta";  (neprasminga apsauga)
    }
    return $result;
}









?>
