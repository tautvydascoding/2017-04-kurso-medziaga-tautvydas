// ===============for  for (cikas cikle)===========================

var vardai = ["Tomas", "Petras", "Juozas", "Kestas", "Mantas"];
var gimDatos = [1969, 1960, 1930, 2000, 1996];
var stazas = [13, 20, 51, 3, 6];

var darbuotojai = [];
darbuotojai[0] = vardai;
darbuotojai[1] = gimDatos;
darbuotojai[2] = stazas;


//uzduotis: isvesti viska graziai eilytese ir is kiekvieno array stalciau savo pirma kintamaji
//console.log(darbuotojai[0].join(","));

// for (i = 0; i < 5; i++) {
//   k=0;
//   console.log(darbuotojai[k][i], " ", darbuotojai[k+1][i], " ", darbuotojai[k+2][i]);
// }              LENGVAS BUDAS



for (i = 0; i < 5; i++) { //eilutes ilgis vardai.length
  var eilute = "";
  for (k = 0; k < darbuotojai.length; k++) { //stulpelio ilgis
  eilute = eilute + " " + darbuotojai[k][i]; //eilute += darbuotojai[k][i]
  }
  console.log(eilute);
}

//console.log(darbuotojai[0][0],darbuotojai[1][0],darbuotojai[2][0]);





// ===========================================





// ===========================================
