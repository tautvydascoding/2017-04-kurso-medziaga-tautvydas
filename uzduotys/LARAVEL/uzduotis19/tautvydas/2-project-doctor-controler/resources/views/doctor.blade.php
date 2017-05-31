<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Doctor page</title>
  </head>
  <body>
    <h1>Curent Doctor</h1>


    <h2>{{  $doctor->name   }}   ==>  <?php echo $doctor->name; ?> </h2>

    <!-- show   -->
    @{{ $doctor->name This will not be processed by Blade }} <br />


    <?php
        if ($doctor) {
          echo $doctor->id . " name: " . $doctor->name . " " . $doctor->lname . "<br />";
          echo "";
        } else {
          echo "<h2>Tokio daktaro nera...</h2>";
        }

        // (($doctor) ?   $doctor = 10  : $doctor = 100 );
    ?>
    @if($doctor)
      <img src="" width="600px" height="400px" />
        {{ $doctor->id . " name: " . $doctor->name . " " . $doctor->lname   }}  <br />
    @else
        <h2> Tokio gydytojo nera...</h2>
    @endif



  </body>
</html>
