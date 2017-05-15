console.log("js failas");

var name,
lastName,
age,
single;

name = "Tom";
lastName = "Jonson";
age = 75;
single = false;

if ( age > 18) {
  console.log("User is: adult");
} else {
  console.log("Use is: not adult!!");
}

if ( name == "Tom") {
  console.log("User name is Tom");
}

if ( age >= 21 || name == "Tom" ) {
  console.log("Tomai, mes tau turime 5% nuolaida");
}

if ( age >= 65 ) {
  console.log("Sveikiname sulaukus garbingo amziau");
  if (single) {
    console.log("Susirask zmona!! http://registrucentras.lt");
  }
}

age = 4;

if (age < 14 ) {
  printToConsole("Atleisk, reikes taveliu pagalvos");
} else if (age > 14 && age < 18) {
  console.log("Populiariausi PS zaidimai http://games.lt");
} else if (age > 18 && age < 40) {
  console.log("Geriausios studijos xxx univeras");
}

// spausdinu i ekrana//
function printToConsole( x ) {
  console.log("Spausdinu: ", x );
}

printToConsole("Tadas", 65465);
