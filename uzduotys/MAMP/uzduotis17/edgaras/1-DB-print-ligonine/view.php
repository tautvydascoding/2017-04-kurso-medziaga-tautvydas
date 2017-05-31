<?php

  require_once('db.php');

  $connection = jungtis_DB(SERVERNAME, USERNAME, PASSWORD, DB_NAME);

  $doctorArray = get_all_dr($connection);

  while($eil = mysqli_fetch_assoc($doctorArray)) {
    $doctorInfo = $eil['name']." ".$eil['lname'];
    // echo "<h2>DOCTOR <span class='doctorName'>".$doctorInfo."</span></h2>";
    // echo "<h3>".$eil['id']." ".$eil['name']." ".$eil['lname']."<h3>";
    ?>
    <h2>
      DOCTOR <span class=doctorName><?php echo $doctorInfo; ?></span>
      Nr. <?php echo $eil['id']; ?>
    </h2>
    <?php
    $get_doct_pac = getPacientByDoctorID($connection, $eil['id']);
    echo "Pacientai:";
    echo "<ul>";
      while($eil2 = mysqli_fetch_assoc($get_doct_pac)) {
        echo "<li>"
        .$eil2['id']." | ".$eil2['name']." | ".$eil2['lname'].
        "</li>";
        }
    echo "</ul>";

  }


  // $doc_id = 3;
  // $get_doct_pac = getPacientByDoctorID($connection, $doc_id);
  // while($eil = mysqli_fetch_assoc($get_doct_pac)) {
  //   echo "<h2>Pacients ".$eil['id']."</h2>";
  //   echo "<h3>".$eil['name']." ".$eil['lname']."<h3>";
  // }

 ?>
