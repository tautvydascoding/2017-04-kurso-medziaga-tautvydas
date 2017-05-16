// =================ARRAY / masyvas==========================



console.log("2js");

// IDEA: kursime nauja masyva uzpildyta, atsitiktiniais skaiciais (pagamintomis detalemis per diena)
parts = [];
for ( k = 0; k < 150;  k++) {
teigiamas = Math.round(Math.random() * 250) + 50 ;
neigiamas = teigiamas * (-1) ;

if ( Math.random() < 0.1) {
parts[k] = neigiamas;
} else {
  parts[k] = teigiamas;
}
}

console.log(parts.join(" "));

// IDEA: visus skaicius paversti teigiamais is masyvo parts
// IDEA: surast geriausia darbuotoja
// IDEA: surasti blogiausia darbuotoja

// IDEA: 1 uzdavinys visus skaicius paversti teigiamais is masyvo parts
for ( kk = 0; kk < 150; kk++ ) {
  // parts[kk] = Math.abs( parts[kk] ); // IDEA: verciame i teigiama skaiciu

if (parts[kk] < 0 ) {
parts[kk] = Math.abs( parts[kk]); // IDEA: verciame i teigiama skaiciu
}
}
console.log(parts.join(" "));

// IDEA: surasti geriausia darbuotoja
var bestworker;
var bestResult = 0;
for (ii = 0; ii <150; ii++) {
  if ( parts[ii] > bestResult) {
    bestworker = ii;
    bestResult = parts[ii];
  }
}
console.log("geriausias rezultatas: ", bestResult);
console.log("geriausias rezultatas: ", bestworker);

// IDEA: 3 surasti prasciausia

var worstWorker;
var worstResult = 0;
for (ii = 0; ii <150; ii++) {
  if ( parts[ii] < worstResult) {
    worstWorker = ii;
    worstResult = parts[ii];
  }
}
console.log("blogiausias rezultatas: ", worstWorker);
console.log("blogiausias rezultatas: ", worstResult);
