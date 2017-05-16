// =================ARRAY / masyvas==========================



console.log("Labas");

var kuprine = ["prozerktorius", "degtukai", "peilis", 50];
console.log(kuprine[0], kuprine[1]);
console.log(kuprine.toString());
console.log(kuprine.join(" "));

kuprine.push("vanduo");
console.log(kuprine.toString());
kuprine.unshift("kiausiniai");

console.log(kuprine.toString());
ranka = kuprine.slice(2,3); // IDEA: copy nuo 2 elemento
console.log("Ranka:" , ranka);
console.log("Kuprineje liko: ", kuprine);

kuprine.splice(2,1);
console.log("Kuprineje liko: ", kuprine);

// console.warn("console blogai atvaizduoja isskleistus masyvus, bet gerai atvaizduoja skliaustuose []");

// IDEA: for

for ( i = 0; i < kuprine.length; i++) {
console.log(kuprine[i]);
}
// IDEA: kursim nauja masyva (Array) uzpildyta, random skaiciais
skaiciai = [];
for ( k = 0; k < 50; k++) {
  skaiciai[k] = Math.round(Math.random() * 100) ;
}
console.log(skaiciai.toString());

// IDEA: uzdavinys: pakeisti random skaicius, kurie yra lyginiai i teksta lyginis
if ( (skaiciai[0] % 2) === 0) {
  skaiciui[0] = "lyginis";
}
console.log( skaiciai[0]);

for ( k = 0; k < 50;  k++) {
  if ( skaiciai[k] % 2 === 0) {
      skaiciai[k] = "lyginis";
}
}
// IDEA: begame per visa masyva naudodami FOR=============
