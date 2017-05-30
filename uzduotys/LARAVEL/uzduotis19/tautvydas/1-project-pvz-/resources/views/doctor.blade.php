<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Doctor page</title>
  </head>
  <body>
    <h1>Curent Doctor</h1>
    
    <?php
        if ($doctor) {
          echo $doctor->id . " name: " . $doctor->name . " " . $doctor->lname . "<br />";
        } else {
          echo "Tokio daktaro nera...";
        }

        ?>
  </body>
</html>
