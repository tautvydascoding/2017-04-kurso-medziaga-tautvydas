<?php

    require_once('db.php');

    $connection = jungtis_DB(SERVERNAME, USERNAME, PASSWORD, DB_NAME);

    $doctorArray = getDoctors($connection);


    while($eil = mysqli_fetch_assoc($doctorArray)) {
        $doctorInfo =  $eil['name'] . " " . $eil['lname']  ;

        // echo "<h2>DOCTOR
        //             <span class='doctorName'>"
        //                 . $doctorInfo .
        //             "</span>
        //             (NR:" . $eil['id'] . ")
        //     </h2>";
        //   ?>

           <h2>
             DOCTOR <span class='doctorName'> <?php echo $doctorInfo; ?></span>
              NR:  <?php echo $eil['id']; ?>
           </h2>

          <?php
        echo "<ul>";
            $pacients = getPacientsByDoctorID($connection, $eil['id']);
            while ($eilPacinet = mysqli_fetch_assoc($pacients)) {
                echo "<li>"
                    . $eilPacinet['name'] . " " . $eilPacinet['lname']
                . "</li>";
            }
        echo " </ul>";

    }

 ?>
