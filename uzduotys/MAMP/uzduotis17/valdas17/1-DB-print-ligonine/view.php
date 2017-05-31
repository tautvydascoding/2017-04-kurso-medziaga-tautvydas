<?php

  echo "<br>labas <br>";
    require_once('db.php');

    $connection = jungtis_DB(SERVERNAME, USERNAME, PASSWORD, DB_NAME);

    $doctorArray = getDoctors($connection);
    while ($eil = mysqli_fetch_assoc($doctorArray)) {
        echo "<h2>DOCTOR</h2>";
        echo "<h3>" . $eil['name'] . " " . $eil['lname'] . "</h3>";
    }

    







    ?>
