<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Testuojam php rikiavimo algoritma </title>
  </head>
  <body>
    <section>
      <h1> <?php echo "Testuojam PHP rikiavimo algoritma"; ?> </h1>



      <?php
          $arrayPrice = [213, 12, 1, 31, 645, 165, 213, 534, 1, 4, 1, 132, 6, 3, 35];

print_r($arrayPrice);
for ( $i=0; $i < sizeOf($arrayPrice); $i++) {
for ( $k=0; $k < sizeof($arrayPrice) -1; $k++) {
if ( $arrayPrice[$k] > $arrayPrice[$k + 1] ) {
$previous = $arrayPrice[k];
$arrayPrice[$k] = $arrayPrice[k+1];
$arrayPrice[$k+1] = prev;


}

}
}


function swapArrayElements ($array, $current, $second ) {
  $previous = $array[$current];
  $current = $array[$second];
  $array[second] = $previous;
}
for ($i=0; $i < sizeOf($arrayPrice) ; $i++) {
for ($k=0; $k < sizeOf($arrayPrice) -1; $k++) {
  if ($arrayPrice[$k] < $arrayPrice[k + 1] ) {
    swapArrayElements ($arrayPrice, $k, $k, +1);
  }
}
}
echo "<br /><br />";
print_r ($arrayPrice) ;










?>





</section>
</body>
</html>
