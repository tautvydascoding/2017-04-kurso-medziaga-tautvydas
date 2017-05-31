<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Naujas dizainas</title>
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

  <link href="css/main.css" rel="stylesheet" text="text/css">
</head>

<body>
  <!-- ______________________________Header_________________________ -->
  <?php include("header.html"); /*linkas i header.html*/
  // <!-- require(); -->
  ?>
  <!-- _______________________________Gallery________________________ -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="gallery">

          <div class="col-lg-4 row1">
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/97/The_Earth_seen_from_Apollo_17.jpg" class="img-circle zeme1" alt="zeme1" width="100" height="100"><br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/OSIRIS_Mars_true_color.jpg/275px-OSIRIS_Mars_true_color.jpg" class="img-circle zeme2" alt="zeme2" width="100" height="100"><br>
          </div>

          <div class="col-lg-4 row2">
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/97/The_Earth_seen_from_Apollo_17.jpg" class="img-circle zeme3" alt="zeme3" width="100" height="100"><br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/97/The_Earth_seen_from_Apollo_17.jpg" class="img-circle zeme4" alt="zeme4" width="100" height="100"><br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/97/The_Earth_seen_from_Apollo_17.jpg" class="img-circle zeme5" alt="zeme5" width="100" height="100"><br>
          </div>

          <div class="col-lg-4 row3">
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/97/The_Earth_seen_from_Apollo_17.jpg" class="img-circle zeme6" alt="zeme6" width="100" height="100"><br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/97/The_Earth_seen_from_Apollo_17.jpg" class="img-circle zeme7" alt="zeme7" width="100" height="100"><br>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- _______________________________Reklamos________________________ -->
<?php
include("ads.html");
 ?>

  <!-- _______________________________Content________________________ -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col_content">
        <div class="col-lg-5 center-block float_none_galerry">
          <div class="content_galerry">
            <h1>Content</h1>
            <article>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
              in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing
              elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
              esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </article>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ______________________________Footer ________________________ -->
  <footer>
    <?php include("footer.html"); /*linkas i footer.html*/
    ?>
  </footer>

</body>

</html>
