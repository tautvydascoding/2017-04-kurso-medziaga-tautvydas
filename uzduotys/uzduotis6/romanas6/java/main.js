console.log("js failas");
var name,
  lastname,
  age,
  single;

name = "Tom";
lastname = "Benson";
age = 45;
single = false;

if (age > 18) {
  console.log("User is: adult");
} else {
  console.log("User is: NOT ADULT!");
}
if (name == "Tom") {
  console.log("User name is Tom");
}
if (age >= 21 & name == "Tom") {
  console.log("Tomai, tau nuolaida 5%. Valio");
}
if (age >= 60) {
  if (single) {
    console.log("linkime Sveikatos. jusu meile dar laukia http://sodra.lt");

  } else {
    console.log("dovana jusu zmonai cia deimantai.lt");
  }

} else {
  console.log("jums dar nera 60");
}

if (age < 14) {
  console.log("sorry, reikia tevu sutikimo");
} else if (age > 14 && age < 18) {
  console.log("PS zaidimai 2 auskte");
} else if (age > 18 && age < 44) {
  console.log("stok i KTU");
}

//spausdina i ekrana
function printToConsole(x, skaicius) {
  console.log("spausdinu:", x, skaicius);
}

printToConsole(Tadas, 1);
