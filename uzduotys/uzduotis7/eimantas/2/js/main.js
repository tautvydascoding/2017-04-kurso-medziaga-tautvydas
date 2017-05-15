console.log("labas");


//kursime nauja masyva uzpildyta, atsitiktiniais skaiciais (pagamintomis detalemis per diena)

parts = [];

for (k = 0; k < 150; k++) {
  teigiamas = Math.round(Math.random() * 250) + 50;
  neigiamas = teigiamas * (-1);
  if (Math.random() < 0.1) {
    parts[k] = neigiamas;
  } else {
    parts[k] = teigiamas;
  }
}

console.log(parts.join(" "));

//2 dalis visus skaicius paversti teigiamais is masyvo "parts"
// surasti menesio darbuotoja
//surasti blogiausia darbuotoja

for (k = 0; k < 150; k++) {
  if (parts[k] < 0) {
    parts[k] = Math.abs(parts[k]);
  }
}

console.log(parts.join(" "));

// 2 uzdavinys
// 2. surasti geriausia darbuotoja
var bestWorker;
var bestResult = 0;
for ( ii = 0; ii < 150; ii++) {
  if ( parts[ii] > bestResult) {
    bestWorker = ii;
    bestResult = parts[ii];
  }
}
console.log(" Geriausias rezultatas: ", bestResult);
console.log(" Geriausias darbuotojas: ", bestWorker);

// 3. surasti prasciausia darbuotoja
var worstWorker;
var worstResult = parts[0]; /*kodel parts[0], o ne tiesiog 300?*/
for ( ii = 0; ii < 150; ii++) {
  if ( parts[ii] < worstResult) {
    worstWorker = ii;
    worstResult = parts[ii];
  }
}
console.log(" prasciausias rezultatas: ", worstResult);
console.log(" prasciausias darbuotojas: ", worstWorker);


/*
var darbuotojoPagamintosDetales = newArray();

var masinosBagazine = ["atsarginisRatas", "kastuvas", "gesintuvas", "virve", "uzkurimoLaidai", "krokodilas"];
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

var nuoVienoIkiSimto = Math.floor(Math.random() * 100);

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
