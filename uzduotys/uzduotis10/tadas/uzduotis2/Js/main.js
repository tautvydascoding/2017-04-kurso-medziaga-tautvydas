// // IDEA: Array/masyvas
//
// // console.log("aloha");
//
// // IDEA: for for
//
// var vardai = ["Tomas", "Petras", "Jonas", "Antanas", "Aloyzas"];
// var gimDatos = [1950, 1960, 1970, 1980, 1990];
// var stazas = [30, 20, 10, 5, 2];
//
// var darbuotojai = [];
// darbuotojai[0] = vardai;
// darbuotojai[1] = gimDatos;
// darbuotojai[2] = stazas;
//
// // console.log(darbuotojai[0].join( ", "));
// for (i = 0; i < 5; i++){  // IDEA: <darbutuojai[0] length
// k = 0;
// // console.log(darbuotojai[k][i]);
// }
//
//
// for ( i = 0; i < 5; i++) {
//   var eilute = " ";
//   for ( k = 0; k < darbuotojai.length; k++) {
// eilute = eilute + " " + darbuotojai[k][i];  // IDEA: eilute += darbuotojai[k][i]
//   }
//   console.log(eilute);
//   document.write(eilute + "<br>");
// }
// IDEA: ===========================svarbus patarimai============
// IDEA: Array: naudojant FOR||while ciklus visada negalvojant masyve naudoti "i"  pvz myarray[i]
// IDEA: FOR: for (i = 0; i < ; i++) {nesusijusi su uzdaviniu (skirtas apeit masyva/)} FOR ir While yra CIKLAI!!!
// IDEA: pasitikrint ar stulpelis ir eilute nesukeisti vietomis
// IDEA: matricas nusipiesti ant popieriaus eskiza su testiniais duomenimis
// IDEA: matrica narys paimamas: myMatrica[x][y] x = stulpelis y = eilute
// IDEA: matricos ilgis daznai skiriasi nuo plocio.
// IDEA: pvz
// IDEA:  pvz for ( i < eiluciu skaicius)
// IDEA: ( k < stulpeliu skaicius)




// var name = "Tomas";
// // IDEA: "Petras", "Juozas", "Kestas", "Mantas"];
//
// if ( name  === "Juozas") {
//   console.log("vardas Juozas");
// } else if ( name === "Petras") {
//   console.log("Vardas yra Petras");
// } else if (name === "Antanas") {
//   console.log("Vardas yra Antanas");
// } else {
//   console.log("nezinomas vardas");
// }

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
}
