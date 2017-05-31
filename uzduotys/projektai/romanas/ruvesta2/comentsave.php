<?php

// include ('controller.php');

define($username, $_POST["firstname"]);
define($useremail, $_POST["email"]);
define($usercomment, $_POST["comments"]);

// public function putcommenttodb ($) {
// }

function newcomment ($connect, $username, $useremail, $usercomment) {
$q=sprintf (
         "INSERT INTO visitors
          VALUES ('', '%s', '%s', '%s','now')",
          mysqli_real_escape_string($connect, $username),
          mysqli_real_escape_string($connect, $useremail),
          mysqli_real_escape_string($connect, $usercomment)
);
$qresult=mysqli_query($connect, $q);
 if (!$qresult) {
  echo "KLAIDA! DB irasas nepavyko";
}else {
echo "<br>OK. Komantaras issaugotas bazeje";
}
}
newcomment($connect, $_POST['firstname'], $_POST['email'], $_POST['comments']);


 ?>
