console.log("labas10-1");


var darbuotojai = [];
darbuotojai[0] = ["Tomas", "Petras", "Juozas", "Kestas", "Mantas"];
darbuotojai[1] = [1969, 1960, 1930, 2000, 1996];
darbuotojai[2] = [13, 20, 51, 3, 6];

// console.log(darbuotojai[0].join(","));
// 1 BUDAS SU VIENU CINKLU FOR
for (i = 0; i < darbuotojai[0].length; i++) {
  k = 0;
  console.log(darbuotojai[k][i], " ", darbuotojai[k + 1][i], " ", darbuotojai[k + 2][i]);
}




//2 BUDAS SU DVIEM CIKLASI FOR
for (i = 0; i < darbuotojai[0].length; i++) {
  var eilute = "";
  for (var k = 0; k < darbuotojai.length; k++) {
    eilute = eilute + " " + darbuotojai[k][i]; //eilute += darbuotojai[k][i]
  }
  console.log(eilute);
  document.write(eilute + "<br>"); // isvedame i html (br kad nesumestu i viena eilute)
}
//
// console.log(darbuotojai[0][0], darbuotojai[1][0], darbuotojai[2][0]);
// console.log(darbuotojai[0][1], darbuotojai[1][1], darbuotojai[2][1]);
// console.log(darbuotojai[0][2], darbuotojai[1][2], darbuotojai[2][2]);
// console.log(darbuotojai[0][3], darbuotojai[1][3], darbuotojai[2][3]);
// console.log(darbuotojai[0][4], darbuotojai[1][4], darbuotojai[2][4]);


//============================SVARBUS PATARIMAI========================================
// ARRAY: jeigu naudoji FOR || WHILE cikla, tai neglvojant masyve naudoti "i" (pvz: myArray[i])
// FOR:  "for (i=0; i < ; ii++) {"- nesusijusi su uzdaviniu (skirtas apeit masyva/ivykdyti daug kartu)}
//matricas- nusipiesti ant popieriaus eskiza su testiniais duomenimis
//matrica narys paiimamas: myMatrica[x][y] (x- stulpelis, y- eilute) (pasitikrintti ar nereikia eilutes sukeisti su stulpeliu)
// matricos ilgis daznai skiriasi nuo plocio.
//pvz.:
//for (i < eiluciu skaicius)
//for (k < stulpeliu skaicius)

//==================================SWITCH===============================================

// ==ILGASIS TINRINIMAS==

// var name = "Petras";
// if (name === "Juozas") {
//   console.log("vardas Juozas");
// } else if (name === "Petras") {
//   console.log("vardas yra Petras");
// } else if (name === "Antanas") {
//   console.log("vardas yra Antanas");
// } else {
//   console.log("nezinomas vardas");
// }

// ==AISKESNIS TIKRINIMAS==

switch (name) {
  case "Juozas":
    console.log("vardas Juozas");
    console.log("tikrai Juozas");
    break;
  case "Petras":
    console.log("vardas Petras");
    break;
  case "Antanas":
    console.log("vardas Antanas");
    break;
  default:
    console.log("nezinomas vardas");
    console.log("nezinomas vardas");
    break;
}
