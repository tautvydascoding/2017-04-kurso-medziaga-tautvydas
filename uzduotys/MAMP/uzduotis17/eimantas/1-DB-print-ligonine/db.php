<?php

define( "USERNAME", "eimantas"); // root // DB - username
define( "PASSWORD", "eimantas"); // root // DB - password
define( "DB_NAME", "ligonine4"); // root
define( "SERVERNAME", "localhost"); // root

// prisijungimas prie duomenu mazes
$connection = mysqli_connect( SERVERNAME, USERNAME, PASSWORD, DB_NAME );

if ($connection) {
  echo "Sveikinu! Prisijungei prie DB";
} else {
  echo "ERROR:: ===Prisijungti prie DB nepavyko===" . mysqli_connect_error();
}

// funkcija gauti pasirinkta daktara

function getDoctors($con){

  $query = "SELECT * FROM doctors";
  $result = mysqli_query($con, $query);

  if (mysqli_num_rows($result) > 0) { //tikrinoma ar radome kazka pagal uzklausa
    return $result;

  } else {
    echo "0 results";
    return null;
  }
}


// sukurti funcija kuri grazina visus nurodyto gydytojo (by id) pacientus


function getPacients($con, $id){
  $query = "SELECT * FROM pacients WHERE doctor_id='$id'";
  $result = mysqli_query($con, $query);

  if ($result == false){
    echo "ERROR: tokio daktaro nera";
  } else
  return $result;
  }























?>
