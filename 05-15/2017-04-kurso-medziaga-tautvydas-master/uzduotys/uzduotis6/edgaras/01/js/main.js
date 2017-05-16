console.log("js failas");

var name,
  lastName,
  age,
  single;

name = "Tom";
lastName = "Jonson";
age = 21;
single = true;

if (age > 18) {
  console.log("user is: adult");
} else {
  console.log("user is: minor");
}
if (name == "Tom") {
  console.log("user name is Tom");
}
if (age >= 21 && name == "Tom") {
  console.log("Tomai, mes tau turime 5% nuolaida");
}
if (age >= 65) {
    console.log("Sveikiname sulaukus garbaus amziaus");
  if (single) {
     console.log("Sveiki, nemiegokite yra dar laiko. Pas mus raste zmona http//registrucentras.lt");
  }
} else {
    console.log("pasidarykite pensijos kaupima");
  if (single) {
    console.log("Sveiki, nemiegokite yra dar laiko. Pas mus rasite zmona http//registrucentras.lt");
  }
}


if (age < 14) {
  console.log("Atleisk, reiks teveliu pagalbos");
} else if (age > 14 && age < 18) {
    console.log("populiariausi PS zaidimai http://games.lt");
} else if (age > 18 && age < 40) {
    console.log("Geriausios universitetines studijos");
}
// spausdinu i ekrana
function printToConsole(x, y = "", z = age) {
  console.log("Spausdinu: " , x , y , z);
}

printToConsole("Tadas");
printToConsole("Tadas" , 2);
printToConsole("Tadas" , 3 , 15);

if (age < 14) {
  printToConsole("Atleisk, reiks teveliu pagalbos");
} else if (age > 14 && age < 18) {
    printToConsole("populiariausi PS zaidimai http://games.lt");
} else if (age > 18 && age < 40) {
    printToConsole("Geriausios universitetines studijos");
}
