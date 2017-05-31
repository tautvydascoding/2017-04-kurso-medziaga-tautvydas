<?php

    $server = "localhost";
    $DB_user = "tautvydas";
    $DB_password = "tratata";
    $DB_name = "testtautvydas";

    $connection = mysqli_connect($server, $DB_user, $DB_password, $DB_name );
    if( $connection == false ) {
      echo "Prisijungti prie DB nepavyko!!!";
    }
    // nustatomas tarptautinis formatas, kad veiktu LT raides
    mysqli_set_charset($connection, 'UTF8');

    function getPosts ($conn) {
      $sql = "SELECT * FROM posts    ";
      $result_array = mysqli_query($conn, $sql);
      // print_r($result_array);
      return $result_array;
    }
    function getCustomPosts ($conn, $text) {
      $sql = "SELECT * FROM posts  where  posts.article like  '%$text%' ";
      $result_array = mysqli_query($conn, $sql);
      // print_r($result_array);
      return $result_array;
    }

?>
