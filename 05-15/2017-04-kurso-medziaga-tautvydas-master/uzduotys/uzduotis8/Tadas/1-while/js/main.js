// =================ARRAY / masyvas==========================

console.log("labas");

// uzduotis: sukurti masyva (50 ilgumo) ir uzpildyti skaiciu 0;===========================================
var spinta = [];
for ( i = 0; i < 50; i++) {
  spinta[i] = 0;
}
console.log(spinta);

// uzduotis: sukurti masyva naudojant While (50 ilgumo) ir uzpildyti skaiciu 1;
var kk = 0;
while (kk < 50) {
spinta[kk] = 1;
  kk++;
}
console.log("masyvas (while): ", spinta);

// while break=======================================
// IDEA: uzduotis:
// IDEA: uzduotis: surasti kelintas zmogus yra "Rico"
var names = ["Enriqueta", "Henrieta", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Apolinaras", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Clemente", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Claudie", "Minh", "Warren"];
var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

turimeVardu = names.length;
console.log("vardu skaicius: ", turimeVardu);

masyvoIlgis = names.length;
var i = 0;
while (i < masyvoIlgis ) {
  if (names[i] === "Rico") {
console.log("Rico numeris: " + i);
break;
  }
  i++;
}
// IDEA: uzduotis:
// IDEA: parasyti funkcija, kuri grazina masyvo elemento numeri;
function findValueInArray( name, myArray) {
  var k = 0;
  while ( k < myArray.length) { // IDEA: k < 50
    if (myArray[k] === name) {
      return k;
    }
  k++;
}
return "Nerandom tokio"; // IDEA: kai nerandame, graziname sita teksta
}

numeris = findValueInArray("Sandi", names );
console.log("Sandi numeris: " + numeris);
numeris = findValueInArray("Gaston", names );
console.log("Gaston numeris: " + findValueInArray("Tadas", lastNames));
// IDEA: uzduotis:
// IDEA: rasti masyve esancio zmogaus "Freida" pavarde
// IDEA: trumpasis sprendimas
ieskomasVardoNr = findValueInArray("Freida", names);
pavarde = lastNames[ieskomasVardoNR];
console.log("Freidos pavarde: ", pavarde);

// IDEA: ilgesnis budas
i = 0;
masyvoIlgis = names.length;
ieskomasVardoNR = [];
do {
  if ( names[i] === "Rico") {
    ieskomasVardoNR = ieskomasVardoNR.push(i);
    console.log("Rico pavarde: ", lastNames[i]);
  //break;
}
i++;
} while ( i < masyvoIlgis)

// kitas budas su While
i = 0;
masyvoIlgis = names.length;
if (names[i] === "Rico") {
  console.log("Rico pavarde: ", lastNames[i]);
}
i++;


// IDEA: switch
// IDEA: white true
