console.log("js failas");

var name,
    lastName,
    age,
    single;

name = "Tom";
lastName = "Jonson";
age = 25;
single = false;

if (age > 18) {
    console.log("User is: adult");
} else {
    console.log("User is: not adult!!");
}

if ( name == "Tom" ) {
  console.log("User name is Tom");
}

if ( age >= 21 || name == "Tom" ) {
  console.log("Tomai, mes tau turime 5% nuolaida");
}

 if (age >= 65) {
   console.log("Sveikiname sulaukus tokio maziaus");
   if (single) {
       console.log("Nemiegokite, yra dar laiko. Pas mus rasite zmona http://registrucentras.lt");
   }
 } else {
   console.log("pasidarykite pensijos kaupima");
 }

age = 4;

 if (age < 14) {
   printToConsole("Atleisk, reikes teveliu pagalbos");
 } else if (age > 14 && age < 18) {
      printToConsole("Populiariausis PS zaidimai http://games.lt");
 } else if (age > 18 && age < 40) {
    printToConsole("Geriausios studijos XXX universitete");
 }

// spausdinu i ekrana
 function printToConsole(x, y = "", zz = age) {
   console.log("Spausdinu: ", x, y, zz );
 }

  printToConsole("Tadas");
  console.log(this);
