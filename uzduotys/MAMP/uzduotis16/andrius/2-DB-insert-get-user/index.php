<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
          echo "<h1>PHP-DB-function: Insert, update, select</h1>";

      define("SERVERNAME", "localhost");
      define("DB_NAME", "ligonine4");
      define("USERNAME", "andriusk");
      define("PASSWORD", "blablabla");

//rasom funkcija kuri prijungia DB
function jungtis_DB($sname, $user, $pass, $dbName) {
  $c = mysqli_connect($sname, $user, $pass, $dbName);
  //jeigu neprisijungia
  if (!$c) { // $c == false (sauktukas ta pati reiskia)
    die ("ERROR: nepavyko prisijungti prie DB " . mysqli_connect_error()) ; // die tas pats kas echo tik po jo viska nutrauks funkcija, nieko daugiau nevykdys
  }
  return $c;
}
      $connection = jungtis_DB (SERVERNAME, USERNAME, PASSWORD, DB_NAME);

// uzduotis 1: sukurti funkcija kuri i DB ideda daktara

// function newDoctor($con, $name, $lastName) {
//   $s = "INSERT INTO doctors VALUES ('', '$name', '$lastName');";
//   $arOk = mysqli_query ($con, $s);
//
//   if ($arOk == false) {
//     echo "ERROR:: createDoctor() - sukurti daktaro nepavyko: " . mysqli_connect_error();
//   }
// }
//
// newDoctor($connection, "Bill", "Kolt" );

// uzduotis 2: sukurti f-ja, kuri grazina visus daktarus "getDoctors()"
// uzduotis 3: sukurti f-ja kuri grazina nurodyta daktara "getDoctors($connection, $id)"
// uzduotis 4: sukurti f-ja kuri pakeicia nurodyto daktaro reiksmes "updateDoctor"


// 2 uzduotis 1 budas

// function getDoctors($con) {
//   $b = "SELECT * FROM doctors";
//   $arGerai = mysqli_query($con, $b);
//   if ($arGerai) {
//   return $arGerai;
// } else {
//   echo "BLOGAI";
// }
// }
//
// $doctors = getDoctors($connection);
// // print_r($doctors);
// $eil = mysqli_fetch_assoc($doctors);
// while ($eil) {
// echo "Username: " . $eil['name'] . "/" . "Lastname: " . $eil['lname'] . "<br />";
// $eil = mysqli_fetch_assoc($doctors); // paimta sekancia "eilute/masyva"
// }
// 2 uzduotis 2 budas

// function getDoctors($con) {
//   $query = "SELECT * FROM doctors";
//   $result = mysqli_query ($con, $query);
//   if(mysqli_num_rows($result) > 0 ) { // tikrname ar radome kazka pagal uzklausa
//     //return $result;
//     while ($eil = mysqli_fetch_assoc($result)) {
//     print_r($eil);
//     echo "<br />";
//     // echo "Usename: " . $eil['name']. "Lastname: " . $eil['lname'] . "<br />";
//     }
//   }else {
//     echo "Rasta 0 rezultatu";
//   }
// }
//
// getDoctors($connection);

// 3 uzduotis
// function getDoctor($con, $x) {
//   $a = "SELECT * FROM doctors WHERE id='$x'";
//   $arGerai = mysqli_query($con, $a);
//   if ($arGerai) {
//   return $arGerai;
// } else {
//   echo "BLOGAI";
// }
// }
//
// $doctor = getDoctor($connection,"1" );
// // print_r($doctors);
// $doc = mysqli_fetch_assoc($doctor);
// echo "Doctor name: " . $doc['name'] . "/" . "Last name: " . $doc['lname'];


//===============print doctor pasidarom==========

function printDoctor($con, $x) {
  $sql = "SELECT * FROM doctors WHERE id='$x'";
  $result = mysqli_query($con, $sql);
  if ($result == false) {
  echo "ERROR:: tokio daktaro nera";
} else {
  $doc = mysqli_fetch_assoc($result);
  echo "Doctor ID: " . $doc['id'] . "/ " . "Doctor name: " . $doc['name'] . "/ " . "Last name: " . $doc['lname'];
}
}
//================================================


// uzduotis 4 sukurti f-ja kuri pakeicia nurodyto daktaro reiksmes "updateDoctor"

function updateDoctor($con, $x, $y, $u) {
  $b = "UPDATE doctors SET name='$y', lname='$u' WHERE id='$x'";
  $arOk = mysqli_query($con, $b);
if (!$arOk) {
echo "BLOGAI";
}
}

updateDoctor($connection,"1", "Jonukas", "Petraitis" );
printDoctor($connection, "1");

// uzduotis namuose. tas pascias funkcijas sukurti pacients lentelei
   ?>

  </body>
</html>
