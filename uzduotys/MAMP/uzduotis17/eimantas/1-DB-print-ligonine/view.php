<?php

echo "<br>labas <br>";

require_once("db.php");

//uzduotis 1: isveda pasirinkta daktara

// $doctorArray = getDoctors($connection);
//
// while($eil = mysqli_fetch_assoc($doctorArray)){
//   echo "<h2>DOCTOR: " . $eil['id'] . "</h2>";
//   echo "<h3>" . $eil['name'] . " " . $eil['lname'] . "</h3>";
// }
//
//
// // 2 uzduotis: isveda visus pacientus pagal daktaro ID
//
// $pacientsArray = getPacients($connection, 5);
//
// while($p = mysqli_fetch_assoc($pacientsArray)){ //suskaldo i masyva
// echo "ID " . $p['id'] . " " . "Name: " . $p['name'] . " " . "Lname: " . $p['lname'] . " " . "Doctor id: " . $p['doctor_id'] . "<br>";
// }


// uzduotis 3: parodyti kiekviena daktara is visus jo pacientus
$doctorArray = getDoctors($connection);

while($eil = mysqli_fetch_assoc($doctorArray)){
//stiliau kurimas
  $doctorInfo = $eil['name'] . " " . $eil['lname'];


  echo "<h2>DOCTOR:
        <span class='doctorName'>"
         . $doctorInfo .
         "</span>
         (NR:" . $eil['id'] . ")
         </h2>";

  // echo "<h3>" . $eil['name'] . " " . $eil['lname'] . "</h3>";

  $pacientsArray = getPacients($connection, $eil['id']);
  while($eilPacient = mysqli_fetch_assoc($pacientsArray)){
    echo "ID " . $eilPacient['id'] . " " . "Name: " . $eilPacient['name'] . " " . "Lname: " . $eilPacient['lname'] . " " . "Doctor id: " . $eilPacient['doctor_id'] . "<br>";

  }
}




















 ?>
