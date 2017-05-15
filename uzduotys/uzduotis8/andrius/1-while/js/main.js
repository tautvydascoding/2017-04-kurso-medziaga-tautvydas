// =================ARRAY / masyvas==========================

console.log("labas");

// Uzduotis: sukurkite masyva (50 ilgumo) ir uzpildyti skaiciu 0;
var spinta = [];
for (var i = 0; i < 50; i++) {
  spinta[i] = 0;
}
console.log("Masyvas spinta: ", spinta);

//Uzduotis: sukurkite masyva naudojant WHILE (50 ilgumo) ir uzpildyti skaiciu 1;
var kk = 0;
while (kk < 50) {
spinta[kk] = 1;
kk++;
}
console.log("Masyvas (while): ", spinta);

//----------------while break--------------
// uzduotis: surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkesne-surasti visus "Rico")
var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Clemente", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Claudie", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

var kelintas;
kk = 0;
while (kk < names.length) {
if (names[kk] === "Rico") {
console.log("kelinta vieta= " + kk);
break;        //jeigu reikia tik pirmo "Rico" naudojam --->break
}
  kk++;
}

//-------------------------------------------------------------------------

// uzduotis: parasyti funkcija, kuri grazina masyvo elemento numeri
function findValueInArray( name, myArray ) {
  var k = 0;
  while ( k < myArray.length) {
    if (myArray[k] === name) {
      return k;
    }
    k++;
  }
  return "Nerandam tokio"; // kai nerandame, grazina sita teksta
}

numeris = findValueInArray("Sandi", names);
console.log("Sandi numeris: " + numeris);
console.log("Gaston numeris: " + findValueInArray("Tautvis", names));



// uzduotis: rasti masyve esancio pirmojo zmogaus su vardu "Freida" pavarde

//           trumpesnis sprendimas
ieskomasVardoNr = findValueInArray("Freida", names);
pavarde = lastNames[ieskomasVardoNr];
console.log("Freidos numeris: " , ieskomasVardoNr);
console.log("Freidos pavarde: " , pavarde);

//              ilgesnis sprendimas
i = 0;
masyvoIlgis = names.length;
iskomoVardoNr = 0;
do {
if (names[i] === "Freida") {
  iskomoVardoNr = i;
  console.log("Freidos pavarde: " , lastNames[i]);
  break;
}
i++;
  } while (i < masyvoIlgis);

//dar kitas sprendimas

i = 0;
while (i < masyvoIlgis) {
  if (names[i] === "Rico") {
  console.log("Rico pavarde: " , lastNames[i]);
  }
  i++;
}






// =================SWITCH==========================





// ===========================================





// ===========================================
