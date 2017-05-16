// =================ARRAY / masyvas==========================



console.log("Labas");

var kuprine = ["prozektorius", "degtukai", "peilis", 50];
console.log(kuprine[0], kuprine[1]);
console.log(kuprine.toString());
console.log(kuprine.join(", "));

kuprine.push("vanduo");
console.log(kuprine.join(", "));

kuprine.unshift("kiausiniai");
console.log(kuprine.join(", "));

ranka = kuprine.slice(2,3);
console.log("ranka: ", ranka);
console.log("kuprineje liko: ", kuprine.join(", "));

kuprine.splice(2,1);
console.log("kuprineje liko: ", kuprine.join(", "));

// console.warn("console blogai atvaizduoja isskleistus masyvus, bet gerai atvaizduoja skliaustuose []");

// ================================================================

for (i = 0; i < kuprine.length; i++) {
    console.log(kuprine[i]);
}

//  kursim nauja masyva uzpildyta, atsitiktiniais skaiciais

skaiciai = [];

for (k = 0; k < 50; k++) {
    skaiciai[k] = Math.round(Math.random() * 100);

}

console.log("skaiciai: ", skaiciai.join(" "));

// uzdavinys: istrinti atsitiktinius lyginius skaicius

if ( (skaiciai[0] % 2) === 0 ) {
    skaiciai[0] = "lyginis";
}

console.log("skaiciai: ", skaiciai.join(" "));

for (k = 0; k < skaiciai.length; k++) {
  if ((skaiciai[k] % 2) === 0) {
    skaiciai[k] = "lyginis";
  }
  if ((skaiciai[k] === "lyginis")) {
    skaiciai[k] = "00";
  }
}

console.log("skaiciai: ", skaiciai.join(" "));

skaiciai.sort();

console.log("skaiciai: ", skaiciai.join(" "));


// var darbuotojoPagamintosDetales = new Array();
//
// var masinosBagazine = ["atsarginisRatas", "kastuvas", "gesintuvas", "virve", "uzkurimoLaidai", "krokodilas"];
// masinosBagazine[1] = "zvejybosKede";
// masinosBagazine.push("maistas");


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


// ===========================================





// ===========================================





// ===========================================
