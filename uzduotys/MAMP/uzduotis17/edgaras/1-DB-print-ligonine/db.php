<?php
    // Prisijungimas prie db-----------------------
  define("SERVERNAME", "localhost");
  define("DB_NAME", "ligonine4");
  define("USERNAME", "edgaras");
  define("PASSWORD", "rooted");

  function jungtis_DB ($sname, $user, $pass, $dbname) {
    $c = mysqli_connect($sname, $user, $pass, $dbname);
    if (!$c) {
      die ("ERROR: nepavyko prisijungti prie DB " . mysqli_connect_error());
    }
    return $c;
  }
  // visų gydytojų išvedimas-----------------
  function get_all_dr ($link) {
    $query = "SELECT * FROM doctors
              ORDER BY name, lname ASC;";
    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result) > 0) {
      return $result;
      } else {
          echo "Rasta 0 rezultatų <br>";
          return null;
          }
    }

// Gauti visus gydytojo pacientus-----------------
    function getPacientByDoctorID($link, $id) {
      $query = "SELECT * FROM pacients
                -- INNER JOIN doctors ON doctors.id = pacients.doctor_id
                WHERE pacients.doctor_id ='$id';";
      $result = mysqli_query($link, $query);
      return $result;

      // if (mysqli_num_rows($result) > 0) {
      //   return $result;
      //   } else {
      //       echo "Rasta 0 rezultatų <br>";
      //       return null;
      //       }
    }



    // SELECT doctors.lname
    // FROM doctors
    // INNER JOIN pacients ON pacients.doctor_id = doctors.id
    // WHERE pacients.name = 'Tom' AND pacients.password = $pass;



// -------------------------------------------------------------
// Prisijungimas prie db----------------

    // function add_dr ($con, $name, $lname) {
    //   $dr = "INSERT INTO doctors (name, lname) VALUE ('$name', '$lname');";
    //   $a = mysqli_query($con, $dr);
    //   if (!$a) {
    //     echo "addDoctor U-Ž-L-Ū-Ž-O";
    //   }
    //   return $a;
    // }
    //
    // // add_dr($connection, "Bill", "Kolt");
    //
    //
    // visų gydytojų išvedimas----------------

    //
    //   $doctors = get_all_dr($connection);
    //   $eil = mysqli_fetch_assoc($doctors);
    //
    //   echo "<br><br>";
    //
    //   while($eil) {
    //     echo "ID: ".$eil["id"]." | "."Username: ".$eil["name"]." | "."Lastname: ".$eil["lname"]."<br>";
    //     $eil = mysqli_fetch_assoc($doctors);
    //     }
    //
    //
    // function get_dr ($link, $id) {
    //   $query = "SELECT * FROM doctors WHERE id = '$id';";
    //   $result = mysqli_query($link, $query);
    //   if (mysqli_num_rows($result) > 0) {
    //     return $result;
    //   } else {
    //       echo "Rasta 0 rezultatų <br>";
    //       return null;
    //       }
    // }
    //
    // $doctor = get_dr($connection, 18);
    // $eilute = mysqli_fetch_assoc($doctor);
    //
    // echo "<br><br> ID: ".$eilute["id"]." | "."Username: ".$eilute["name"]." | "."Lastname: ".$eilute["lname"]."<br><br>";
    //
    //
    //   function update_dr ($link, $id, $name, $lname) {
    //     $query = "UPDATE doctors SET name ='$name', lname='$lname' WHERE id = '$id';";
    //     $result = mysqli_query($link, $query);
    //     if (!$result) {
    //         echo "Rasta 0 rezultatų <br>";
    //       }
    //   }
    //
    //   $x = 1;
    //   $up_doctor = update_dr($connection, $x, "Tom", "Opsa");
    //   $doctor = print_dr($connection, $x);
    //
    //
    //   function print_dr ($link, $id) {
    //     $query = "SELECT * FROM doctors WHERE id = '$id';";
    //     $result = mysqli_query($link, $query);
    //     if ($result) {
    //       $eilute = mysqli_fetch_assoc($result);
    //       echo "<br><br> ID: ".$eilute["id"]." | "."Username: ".$eilute["name"]." | "."Lastname: ".$eilute["lname"]."<br><br>";
    //       } else {
    //         echo "Rasta 0 rezultatų <br>";
    //         }
    //     }
    //
    //
    //   $doctor = print_dr($connection, 2);


?>
