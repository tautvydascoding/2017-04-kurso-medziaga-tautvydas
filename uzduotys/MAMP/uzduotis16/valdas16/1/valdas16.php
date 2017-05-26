<?php


echo "<h1> PHP-DB-connection</h1>";

define( "USERNAME", "makaroon");
define( "PASSWORD", "makaronaz67");
define( "DB_NAME", "ligonine4");
define( "SERVERNAME", "localhost");

$connection = mysqli_connect( SERVERNAME, USERNAME,  PASSWORD, DB_NAME );

if ($connection) {
    echo "Sveikinu prisijungus prie DB!";
} else {
    echo "ERROR:: ===Prisijungti prie DB nepavyko===" . mysqli_connect_error();
}

//uzduotis: sukurti nauja daktara "doctors" lenteleje
//uzduotis: sukurti nauja pacienta "Just", "Sem, priskirta pirmam daktarui (id=1)

//$sql = "INSERT INTO doctors VALUES ('', 'Petras', 'Grybas')";
//$sql = "INSERT INTO doctors (id, name, lname) VALUES ('', 'Karl', 'Tomson')";
$sql = "INSERT INTO pacients (id, name, lname, doctor_id ) VALUES ('', 'Just', 'Sem', '1')";

$arPavykoSQL = mysqli_query($connection, $sql);
if($arPavykoSQL) {
    echo "SQL pavyko ivykdyti";
} else {
    echo "ERROR:: SQL nepavyko ivykdyti!!!" . mysqli_connect_error();
}






?>













/**
 * Created by PhpStorm.
 * User: rakuns
 * Date: 2017-05-25
 * Time: 10:06
 */