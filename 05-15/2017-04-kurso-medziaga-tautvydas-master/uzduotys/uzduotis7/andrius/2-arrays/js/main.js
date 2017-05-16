// =================ARRAY / masyvas==========================

console.log("labas2");



// kursime nauja masyva uzpildyta atsitiktiniais skaiciais (pagamintomis detalemis per diena)

parts = [];
for ( k = 0; k < 150; k++) {
  teigiamas = Math.round(Math.random() * 250) + 50;
  neigiamas = teigiamas * (-1);

  if (Math.random() < 0.1) {
    parts[k] = neigiamas;
  } else {
    parts[k] = teigiamas;
  }
}

console.log(parts.join(" "));

//uzdavinys:
// a) visus skaicius paversti teigiamais (is masyvo parts);
// b) surasti geriausia darbuotoja; <---- darbuotojas lygu array vieta
// c) surasti blogiausia darbuotoja

for ( kk = 0; kk < 150; kk++) {
  // parts[kk] = Math.abs(parts[kk]); verciame i teigiama
if (parts[kk] < 0) {
  parts[kk] = Math.abs(parts[kk]);
}
}
console.log(parts.join(" "));



// b)
var bestWorker;
var bestResult = 0;

for (ii = 0; ii < parts.length; ii++) {
if ( parts[ii] > bestResult) {
  bestWorker = ii;
  bestResult = parts[ii];
}
}
console.log("Geriausias rezultatas: ", bestResult);
console.log("Geriausias darbuotojas: ", bestWorker);


// c)

var worstWorker;
var worstResult = parts[0];

for (darbuotojoNumeris = 0; darbuotojoNumeris < parts.length; darbuotojoNumeris++) {
if (parts[darbuotojoNumeris] < worstResult) {
  worstWorker = darbuotojoNumeris;
  worstResult = parts[darbuotojoNumeris];
}
}
console.log("Blogiausias rezultatas: ", worstResult);
console.log("blogiausias darbuotojas: ", worstWorker);
