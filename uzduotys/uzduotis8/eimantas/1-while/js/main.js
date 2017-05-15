// =================ARRAY / masyvas==========================



console.log("labas");

// sukurti 50 ilgio masyva naudojant for
var spinta = [];

for ( i = 0; i < 50; i++ ) {
  spinta[i] = 0;
}

console.log("Masyvas spinta: ", spinta);
// ===sukurti masyva 50 ilgio naudojant while

var kk = 0;
while (kk < 50) {
  spinta[kk] = 1;
  kk++;
}

console.log("Masyvas spinta: ", spinta);

// =========while break
// uzduotis: surasti kelintas zmogus yra "Rico"
var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Clemente", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Claudie", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

masyvoIlgis = names.length; // masyvo ilgis
pavardziuIlgis = lastNames.length;
console.log("Vardu turime: ", masyvoIlgis);
console.log("Vardu pavardziu: ", pavardziuIlgis);

/* masyvoIlgis = names.length;
while (i < masyvoIlgis) {
if (names[i] === "Rico") {
console.log(i);
}
i++;
}    galima ir taip aprasyti pradzia  */

var i = 0;
masyvoIlgis = names.length;

while (i < masyvoIlgis) {
  if ( names[i] === "Rico") {
  console.log("Rico numeris ", i);
  }
  i++;
} // sitas masyvas tikrina iki galo (jeigu masyve bus daugiau "Rico" tai juos visus ir suras)


/*while (i < 50) {
  if ( names[i] === "Rico") {
    break;
  }
  i++;
} // sitas masyvas suranda tik pati prima "Rico" ir ji isveda i console
console.log(i);*/



//--------------------2 uzduotis -----------------------------------------
// uzduotis: parasyti funkcija, kuri grazina masyvo elemento numeri.



function findValueInArray(name, myArray) {
    var k = 0;
    while (k < myArray.length) {
    if (myArray[k] === name) {
      return k;
    }
    k++;
  } return "Neradom tokio";
}

numeris = findValueInArray("Freida", names);
console.log("Freidos numeris: ", numeris);
console.log("Gaston numeris ", findValueInArray("Tautvis", lastNames) );

//uzduotis: pavarde masyve esancio zmogaus vardu "Freida" (pirmojo).

var i = 0;
var masyvoIlgis = names.length;

while (i < masyvoIlgis) {
  if ( names[i] === "Freida") {
  numeris = i;
}
  i++;
}

console.log("Freidos pavarde: ", lastNames[numeris]);
// ===========================================
