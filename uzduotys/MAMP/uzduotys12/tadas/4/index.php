<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test PHP</title>
  </head>
  <body>
<h1>Test PHP arrays</h1>

    <?php
echo "<h2> Labas</h2>" ;
echo "Aloha <br />" ;

$humans = ["name" => "Tom",
"lname" => "Okpvol",
1996, 2, 16];
print_r($humans);

// IDEA: foreach skirtas begti per masyvus. kiekviena masyvo stalciu prilygina susigalvotam kintamajam
foreach ($humans as $human) {
echo "Reiksme: $human <br />";
}
?>

  </body>
</html>
