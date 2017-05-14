// =================ARRAY / masyvas==========================

console.log("labas");

var kuprine = ["prozektorius", "degtukai", "peilis", 50];
console.log(kuprine[0], kuprine[1]);
console.log(kuprine.toString());
console.log(kuprine.join(";;;;"));

kuprine.push("vanduo");
console.log(kuprine.toString());

kuprine.unshift("kiausiniai");
console.log(kuprine.toString());

ranka = kuprine.slice(2,3);
console.log("ranka: ", ranka);
console.log("Kuprineje liko: ",kuprine);

kuprine.splice(2,1);
console.log("Kuprineje liko: ",kuprine);


for (i = 0; i < kuprine.length ; i++) {
  //kuprine[i] = "10";
  console.log(kuprine[i]);
}

//kursime nauja masyva uzpildyta, atsitiktiniais skaiciais

skaiciai = [];

for ( k = 0; k < 50; k++) {
  skaiciai[k] = Math.round(Math.random() * 100);
}

console.log(skaiciai.toString());

//uzdavinys: pakeisti atsitiktinius skaicius, kurie yra lyginiai i "lyginis"

if ( (skaiciai[0] % 2) === 0) {
  skaiciai[0] = "lyginis";
}

console.log( skaiciai[0] );

for ( k = 0; k < 50; k++) {
  if (skaiciai[k] % 2 === 0) {
    skaiciai[k] = "lyginis";
  }
}

/*----------------------------------------------------------------------------------------------------
var darbuotojoPagamintosDetales = new Array();

var masinosBagazine = ["atsarginisRatas", "kastuvas", "gesintuvas", "virve", "uzkurimoLaidai", "krokodilas”];
// masinosBagazine[1] = "zvejybosKede";
masinosBagazine.push("maistas");


// console.warn("console blogai atvaizduoja isskleistus masyvus, bet gerai atvaizduoja skliaustuose []");
// masinosBagazine.splice(3, 2);
// spausdintiIKonsoleSuKomentaru("iskerpome is masyvo 2 elementus nuo trecio",masinosBagazine);
// masinosBagazine.slice(2);
// spausdintiIKonsoleSuKomentaru("iskroveme bagazine, pasilikome 2 daiktus",masinosBagazine);

//====================== begame per visa masyva  naudodami FOR ============
// for ( var i = 0; i < masinosBagazine.length; i++ ) {
//    // i = 0 -> 1 -> 2 - >
//    // tikriname kiekviena masyvo elementa
//     if( masinosBagazine[i] === "gesintuvas") {
//         masinosBagazine[i] = "zvejybosKede";
//     }
// }
// spausdintiIKonsole(masinosBagazine);
//=======WHILE
//  var i = 0;
// while ( i < masinosBagazine.length ) {
//   console.log(masinosBagazine[i]);
//   i++;
// }

// ==================MATH=========================

 var nuoVienoIkiSimto = Math.floor(Math.random() * 100) ;

// ====================FOR /   WHILE=======================
// for()
// arba
// while()

// =====sukurti masyva 100 elementu ilgio naudojant FOR
// var darbuotojoPagamintosDetales = [];
// for( var i =0; i < 100; i++ ) {
//   darbuotojoPagamintosDetales[i] = Math.floor(Math.random() * 100);
// }

//===== sukurti masyva 100 elementu ilgio naudojant WHILE
// var darbuotojoPagamintosDetales = [];
// var t = 0;
// while (darbuotojoPagamintosDetales.length < 100) {
//     darbuotojoPagamintosDetales[t] = Math.floor(Math.random() * 100);
//     t++;
// }

//===== sukurti masyva 100 elementu ilgio naudojant WHILE (2)
// var darbuotojoPagamintosDetales = new Array(100);
// while (darbuotojoPagamintosDetales.length < 100) {
//     darbuotojoPagamintosDetales.push(  Math.floor(Math.random() * 100));
// }
// spausdintiIKonsoleSuKomentaru("darbuotoju detale: ", darbuotojoPagamintosDetales);

*/
