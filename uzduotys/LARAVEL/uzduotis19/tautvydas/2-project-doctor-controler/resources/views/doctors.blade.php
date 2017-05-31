<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      echo "<h1>All doctors:</h1>";

      // foreach ($doctors as $doctor  ) {
      //     echo  $doctor->id . " Name " . $doctor->name . " " .  $doctor->lname ."<br />";
      // }
    ?>
    <h2>Daktarai:</h2>

    @foreach ($doctors as $doctor  )

        <!-- <a href="doctor/<?php //echo $doctor->id; ?>">  -->
        <a href="doctor/{{$doctor->id}}">
            {{  $doctor->id . " Name " . $doctor->name . " " .  $doctor->lname   }}  <br />
        </a>

    @endforeach


  </body>
</html>
