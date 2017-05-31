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
      define("USERNAME", "edgaras");
      define("PASSWORD", "rooted");

      function jungtis_DB ($sname, $user, $pass, $dbname) {
        $c = mysqli_connect($sname, $user, $pass, $dbname);
        if (!$c) {
          die ("ERROR: nepavyko prisijungti prie DB " . mysqli_connect_error());
        }
        return $c;
      }

      $connection = jungtis_DB(SERVERNAME, USERNAME, PASSWORD, DB_NAME);

      // echo "vis dar bandau ";

      function add_dr ($con, $name, $lname) {
        $dr = "INSERT INTO doctors (name, lname) VALUE ('$name', '$lname');";
        $a = mysqli_query($con, $dr);
        if (!$a) {
          echo "addDoctor U-Ž-L-Ū-Ž-O";
        }
        return $a;
      }

      // add_dr($connection, "Bill", "Kolt");


      function get_all_dr ($link) {
        $query = "SELECT * FROM doctors;";
        $result = mysqli_query($link, $query);

        if (mysqli_num_rows($result) > 0) {
          return $result;
          } else {
              echo "Rasta 0 rezultatų <br>";
              return null;
              }
        }

        $doctors = get_all_dr($connection);
        $eil = mysqli_fetch_assoc($doctors);

        echo "<br><br>";

        while($eil) {
          echo "ID: ".$eil["id"]." | "."Username: ".$eil["name"]." | "."Lastname: ".$eil["lname"]."<br>";
          $eil = mysqli_fetch_assoc($doctors);
          }


      function get_dr ($link, $id) {
        $query = "SELECT * FROM doctors WHERE id = '$id';";
        $result = mysqli_query($link, $query);
        if (mysqli_num_rows($result) > 0) {
          return $result;
        } else {
            echo "Rasta 0 rezultatų <br>";
            return null;
            }
      }

      $doctor = get_dr($connection, 18);
      $eilute = mysqli_fetch_assoc($doctor);

      echo "<br><br> ID: ".$eilute["id"]." | "."Username: ".$eilute["name"]." | "."Lastname: ".$eilute["lname"]."<br><br>";


        function update_dr ($link, $id, $name, $lname) {
          $query = "UPDATE doctors SET name ='$name', lname='$lname' WHERE id = '$id';";
          $result = mysqli_query($link, $query);
          if (!$result) {
              echo "Rasta 0 rezultatų <br>";
            }
        }

        $x = 1;
        $up_doctor = update_dr($connection, $x, "Tom", "Opsa");
        $doctor = print_dr($connection, $x);


        function print_dr ($link, $id) {
          $query = "SELECT * FROM doctors WHERE id = '$id';";
          $result = mysqli_query($link, $query);
          if ($result) {
            $eilute = mysqli_fetch_assoc($result);
            echo "<br><br> ID: ".$eilute["id"]." | "."Username: ".$eilute["name"]." | "."Lastname: ".$eilute["lname"]."<br><br>";
            } else {
              echo "Rasta 0 rezultatų <br>";
              }
          }

          
        $doctor = print_dr($connection, 2);

    ?>
  </body>
</html>
