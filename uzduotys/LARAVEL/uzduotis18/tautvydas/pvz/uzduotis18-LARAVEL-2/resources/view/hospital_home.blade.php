<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>teset</title>
  </head>
  <body>
    <h1>Hospital : Carlos S4320</h1>
    <p>
     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
      <?php
          foreach($users as $user) {
            echo " Doctor name: <a href='doctor/$user->id'> $user->name</a>  <br>";
          }
       ?>
  </body>
</html>
