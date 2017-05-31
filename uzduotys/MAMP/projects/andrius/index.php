<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Rūtos ūkis</title>
  <link href="css/normalize.css" rel="stylesheet" type="text/css" />
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="lib/fullPage/jquery.fullPage.css" rel="stylesheet" type="text/css" />
  <link href="css/main.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&amp;subset=latin-ext" rel="stylesheet">
  <script src="lib/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
  <!-- <script src="lib/fullPage/vendors/jquery.easings.min.js"></script> -->
  <!-- <script src="lib/fullPage/vendors/scrolloverflow.min.js" type="text/javascript"></script> -->
  <script src="lib/fullPage/jquery.fullPage.min.js" type="text/javascript"></script>
  <script src="lib\bootstrap\js\bootstrap.min.js"></script>
</head>

<body>
  <!-- IDEA: Start HEADER -->
  <header>
    <?php include("header.html"); ?>
  </header>

  <!-- IDEA: Start CONTENT -->
  <div id="fullpage">
    <div id="psl-1" class="section" data-anchor="firstPage">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center text-uppercase">
            <h1 class="titleh1">Rūtos ūkis</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 ">
            <div class="line1 center-block">
            </div>
          </div>
        </div>
        <!-- <div class="row">
          <div class="col-lg-12 text-center">
            <div class="">
              <a href="#" class="btn btn-default transpEffect" role="button">Apie mus</a>
            </div>
          </div>
        </div> -->
      </div>
      <div class="nextPageHolder">
        <a href="#secondPage" class="scrollDown">
          <img alt="White Page Down Arrow" class="scroll-down-arrow" src="img/down-arrow-icon-1.png">
          <span>Scroll Down</span>
        </a>
      </div>
    </div>
    <div id="psl-2" class="section" data-anchor="secondPage">
      <div class="nextPageHolder">
        <a href="#thirdPage" class="scrollDown">
          <img alt="White Page Down Arrow" class="scroll-down-arrow" src="img/down-arrow-icon-1.png">
          <span>Scroll Down</span> 
        </a>
      </div>
    </div>
    <div id="psl-3" class="section" data-anchor="thirdPage">
      <div class="nextPageHolder">
        <a href="#fourthPage" class="scrollDown">
          <img alt="White Page Down Arrow" class="scroll-down-arrow" src="img/down-arrow-icon-1.png">
          <span>Scroll Down</span>
        </a>
      </div>
    </div>
    <div id="psl-4" class="section" data-anchor="fourthPage">
    </div>

  </div>

  <!-- IDEA: Start FOOTER -->
  <footer>
  </footer>
  <!-- IDEA: mano js failas -->
  <script src="js/main.js" type="text/javascript"></script>
</body>

</html>
