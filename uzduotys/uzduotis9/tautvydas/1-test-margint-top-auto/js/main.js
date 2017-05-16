// =================ARRAY / masyvas==========================

console.log("labas");

// Uzduotis: sukurti masyva (50 ilgumo) ir uzpildyti skaiciu 0;
var spinta = [];
for ( i = 0; i < 50; i++) {
  spinta[i] = 0;
}
console.log("Masyvas spinta: ", spinta);

// uzduotis:   sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti skaiciu 1;
var kk = 0;
while (kk < 50) {
  spinta[kk] = 1;
  kk++;
}
console.log("Masyvas (while): ", spinta );

//------------while break--
// uzduotis:----------------------------
// surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

turimeVardu = names.length;
console.log("vardu skaicius: ", turimeVardu);

masyvoIlgis = names.length;  // masyvoIlgis = 50;
var i = 0;
while (i  < masyvoIlgis) {
  if (names[i] === "Rico") {
      console.log("Rico numeris: " + i);
      break;
  }
  i++;
}
// uzduotis:--------------------------
// parasyti funkcija, kuri grazina masyvo elemento numeri
function findValueInArray( name, myArray) {
    var k = 0;
    while ( k < myArray.length) { // k < 50
        if (myArray[k] === name) {
          return k;
        }
        k++;
    }
    return "Neradom tokio"; // kai  nerandame, graziname sita teksta
}

numeris = findValueInArray("Sandi", names);
console.log("Sandi numeris: " + numeris);
console.log("Gaston numeris: " + findValueInArray("Tautvis", lastNames));
// uzduots:----------------------------
// rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
  //---- trumpasis sprendimas---
  ieskomasVardoNR = findValueInArray("Freida", names);
  pavarde = lastNames[ieskomasVardoNR];
  console.log("Freidos pavarde:  " , pavarde);

  //---- ilgesnis sprendimas----
  i = 0;
  masyvoIlgis = names.length;
  ieskomoVardoNR = [];
  do {
    if ( names[i] === "Rico") {
      ieskomoVardoNR = ieskomoVardoNR.push(i);
      console.log("Rico pavarde: ", lastNames[i]);
      // break;
    }
    i++;
  }   while ( i < masyvoIlgis);

  // -----kitas budas su While----
  i = 0;
  masyvoIlgis = names.length;
  while (i < masyvoIlgis) {
    if (names[i] === "Rico") {
          console.log("Rico pavarde: ", lastNames[i]); 
    }
    i++;
  }



// rasti visu zmoniu vardu "Rico" pavardes

// ================SWITCH===========================
// ================white true===========================
var i = 0;
while (true) {
  if (names[i] === "Rico") {
      console.log("Rico numeris: " + i);
      break;
  }
  if ( i === 1000000) {
    break;
  }
  i++;
}




// ===========================================





// ===========================================
