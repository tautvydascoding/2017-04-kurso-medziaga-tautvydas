// =================ARRAY / masyvas==========================

console.log("labas");

//============for for========================

var darbuotojai =[];
darbuotojai[0] = ["Tomas", "Petras", "Juozas", "Kestas", "Mantas"];
darbuotojai[1] = [1969, 1960, 1930, 2000, 1996];
darbuotojai[2] = [13, 20, 51, 3, 6];

// console.log(darbuotojai[0].join( ", "));

// uzdavinys: naudojant tik : "darbuotojai" masyva ir for for ciklus, isvesti i konsole matricos duomenis:
// Tomas   1969   13
// Petras  1960   20

for (i = 0; i < 5; i++) {    // < darbuotojai[0].length
      k = 0;
      console.log(darbuotojai[k][i], " ", darbuotojai[k+1][i], " ", darbuotojai[k+2][i] );
}

for (i = 0; i < 5; i++) {    // < darbuotojai[0].length
  var eilete = "";
  for ( k = 0; k <  darbuotojai.length; k++) {
       eilete = eilete + " " + darbuotojai[k][i];  // eilete +=  darbuotojai[k][i];
  }
  console.log(eilete);
  document.write(eilete + "<br>");
}

// =================svarbus patarimai===================:
// ARRAY: jeigu naudoji FOR || while cikla, tai negalvojant masyve naudoti "i" (pvz.: myArray[i])
// FOR:   "for (i = 0; i < x; i++) {"  - nesusijusi su uzdaviniu (skirtas apeit masyva/ ivykdyti daug kartu kazka)
// matricas  - visada nusipiesti ant popieriaus eskiza su testiniais duomenimis
// matrica narys paimamas: myMatica[x][y]   x- stulpelis; y - eilute
// matrica - pasitikritni ar nereik x ir y sukeisti vietomis (ar nesuklydai kuris stulpelis ir kuris eilute )
// matricos ilgis daznai skiriasi nuo plocio.
//  pvz.:
 // for ( i < eiluciuSkaicius)
 //    for ( k < stulpeliuSkaicius)

// ================SWITCH===========================

var name =  "Petras";
//, "Petras", "Juozas", "Kestas", "Mantas"];

// ilgasis tikrinimas
// if ( name === "Juozas" ) {
//   console.log("vardas Juozas");
// } else if ( name === "Petras") {
//     console.log("Vardas yra Petras");
//   } else if (name === "Antanas") {
//         console.log("Vardas yra Antanas");
//   } else {
//       console.log("nezinomas vardas");
//   }


// aiskesnis tikrinimas
switch (name) {
  case "Juozas":
                console.log("vardas Juozas");
                console.log("tikrai juozas");
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

// ===========================================





// ===========================================
