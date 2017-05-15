// =================ARRAY / masyvas==========================



console.log("labas");

// kursime nauja masyva uzpildyta, atsitiktiniais skaiciais (pagamintos datales per diena)

parts = [];

for ( k = 0; k < 150; k++) {
  rnd = Math.random();
  teigiamas = Math.round(rnd * 250) + 50;
  neigiamas = teigiamas * (-1);
  if ( rnd >  0.1) {
    parts[k] = teigiamas;
  } else {
    parts[k] = neigiamas;
  }
}

console.log(parts.join(" "));

// 1. visus skaicius paversti teigiamais (is masyvo)

for (kk = 0; kk < parts.length; kk++) {
    if (parts[kk] < 0) {
      parts[kk] = Math.abs(parts[kk]);
    }
}

console.log(parts.join(" "));

// 2. surasti geriausia darbuotuoja

var bestWorker,
    bestResult = 0;

  for (ii = 0; ii < parts.length ; ii++) {
    if (parts[ii] > bestResult) {
      bestWorker = ii;
      bestResult = parts[ii];
    }
}

console.log(parts.join(" "));
console.log("Geriausias resultatas: ", bestResult);
console.log("Geriausias darbuotojas: ", bestWorker);

// 3. surasti blogiausia darbuotoja

var worstWorker,
    worstResult = 300;

  for (ii = 0; ii < parts.length ; ii++) {
    if (parts[ii] < worstResult) {
      worstWorker = ii;
      worstResult = parts[ii];
    }
}

console.log(parts.join(" "));
console.log("Blogiausias resultatas: ", worstResult);
console.log("Blogiausias darbuotojas: ", worstWorker);

min = Math.min(...parts);
max = Math.max(...parts);

console.log(" ");
console.log("Geriausias resultatas: ", max);
console.log("Blogiausias resultatas: ", min);

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

// var nuoVienoIkiSimto = Math.floor(Math.random() * 100) ;

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
