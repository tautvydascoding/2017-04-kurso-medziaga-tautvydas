<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Kontaktai | Rūtos ūkis</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/normalize.css" rel="stylesheet" type="text/css" />
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="css/main.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&amp;subset=latin-ext" rel="stylesheet">
  <script src="lib/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
  <?php
include("send-email.php");
 ?>

    <!-- IDEA: Start HEADER -->
    <header>
      <?php include("header.php"); ?>
    </header>
    <!-- IDEA: Start CONTENT -->
    <div class="container-fuild content">
      <div class="row noMarginLR">
        <div class="col-md-3 col-sm-3 hidden-xs contentLeft">
          <div class="rotate90">
            Kontaktai
          </div>
        </div>
        <div class="col-md-3 col-sm-3 hidden-xs">
        </div>

        <div class="col-sm-9">
          <?php include("contacts.php"); ?>
        </div>

      </div>
    </div>

    <!-- IDEA: Start FOOTER -->
    <footer>
      <div class="row">
        <div class="col-sm-3 text-center">
          © 2017 visos teisės saugomos
        </div>
      </div>
    </footer>
    <!-- IDEA: mano js failas -->
    <script src="js/main.js" type="text/javascript"></script>
</body>

</html>
