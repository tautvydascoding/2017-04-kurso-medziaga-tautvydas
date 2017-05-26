<?php

echo "<h1>PHP-DB-function: Insert, update, select</h1>";


define("SERVERNAME", "localhost");
define("DB_NAME", "ligonine4");
define("USERNAME", "makaroon");
define("PASSWORD", "makaronaz67");



function connect_DB($name, $user, $pass, $dbName) {
     $c = mysqli_connect( $name, $user, $pass, $dbName );

     //jeigu neprisijunge
    if (!$c) { //$c == false
        die("ERROR: nepavyko prisijungti prie DB" . mysqli_connect_error());
        echo  "bandau isvesti";
    }
    return $c;
}

$connection = connect_DB(SERVERNAME, USERNAME, PASSWORD, DB_NAME);

//echo 'vis dar bandau';


//uzduotis 1: Sukurti funkcija, kuri i DB ideda daktara


//function createDoctor($con, $name, $lastName) {
//    $s = "INSERT INTO doctors VALUES ('', '$name', '$lastName');";
//    $arPavykoSQL = mysqli_query($con, $s);
//    if ($arPavykoSQL == false) {
//        echo "ERROR: createDoctor() - sukurti daktaro nepavyko: ";
//    }
//}

//createDoctor($connection, "Bill", "Kolt");

//uzduotis 2: sukurti funkcija, kuri grazina visus daktarus "getDoctors()"

//function getDoctors($con) {
//    $query = "SELECT * FROM doctors";
//    $result = mysqli_query($con, $query);
//   if( mysqli_num_rows($result) > 0 ) {  // tikriname ar radome kazka pagal uzklausa
//       return $result;
//   } else {
//       echo "Rasta 0 resultatu <br />";
//       return null;
//    }
//}
//$doctors = getDoctors($connection);
//$eil = mysqli_fetch_assoc($doctors);
//while( $eil) {
    // print_r($eil);
    // echo "<br />";
//    echo "Username: " . $eil['name']." Lastname:  ".$eil['lname']."<br>";
//    $eil = mysqli_fetch_assoc($doctors);
//}


//uzduotis 3:sukurti funkcija, kuri grazina nurodyta daktara "getDoctors($id)"

function getDoctor($connect, $id) {
    $sql = "SELECT * FROM doctors WHERE id = $id";
    $result = mysqli_query($connect, $sql );
    if ($result == false) {
        echo "ERROR: tokio daktaro nera";
    }
    return $result;
}
//$doctor = getDoctor($connection, 5);
//$doc = mysqli_fetch_assoc($doctor);
//echo "Doctor name:" .  $doc['name'] . " Last name:" . $doc['lname'];


//uzduotis 4: sukurti funkcija, kuri pakeicia nurodyto daktaro reiksmes "updateDoctor"

function updateDoctor($con)




















?>
/**
 * Created by PhpStorm.
 * User: rakuns
 * Date: 2017-05-25
 * Time: 11:06
 */