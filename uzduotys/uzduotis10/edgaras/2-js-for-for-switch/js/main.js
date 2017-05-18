// =================ARRAY / masyvas==========================

console.log("2-js-function-scopes");
console.log("=================for for==========================", "\n");
// =================for for==========================

var vardai = ["Tomas", "Petras", "Juozas", "Kęstutis", "Mantas"];
var gimDatos = [1969, 1960, 1930, 2000, 1996];
var stazas = [13, 20, 51,  3, 6];

var darbuotojai = [];
darbuotojai[0] = vardai;
darbuotojai[1] = gimDatos;
darbuotojai[2] = stazas;

// console.log(darbuotojai[0].join(", "));

for (var i = 0; i < vardai.length; i++) {
  for (var k = 0; k < 1; k++) {
    // console.log(darbuotojai[k++][i] + " | " + darbuotojai[k++][i] + " | " + darbuotojai[k][i]);

    console.log(darbuotojai[k][i] + " | " + darbuotojai[k+1][i] + " | " + darbuotojai[k+2][i]);
    document.write("<br>", darbuotojai[k][i] + " | " + darbuotojai[k+1][i] + " | " + darbuotojai[k+2][i]);
  }
}

console.log("=================for for==========================", "\n");


for (var i = 0; i < vardai.length; i++) {
  var eilute = "";
  for (var k = 0; k < darbuotojai.length; k++) {
    eilute += darbuotojai[k][i] + " | ";
  }
  console.log("\n", eilute);
  document.write("<br>" , eilute);
}

// =================switch==========================

var name = "Petras";

if (name === "Juozas"){
  console.log("Vardas Juozas");
  console.log("===================================================");

  } else if (name === "Petras") {
    console.log("Vardas Petras");
    console.log("===================================================");

    } else if (name === "Antanas") {
      console.log("Vardas Antanas");
      console.log("===================================================");

      } else {
        console.log("Nežinomas vardas");
        console.log("===================================================");

        }

switch (name) {
  case "Juozas":
                console.log("Vardas Juozas");
                console.log("Tikrai Juozas");
                break;
  case "Petras":
                console.log("Vardas Petras");
                break;
  case "Petras":
                console.log("Vardas Petras");
                break;
  default:
                console.log("Nežinomas vardas");
                break;
}
