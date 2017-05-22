/**
 * Created by rakuns on 2017-05-15.
 */
console.log("labas");

//Uzduotis: sukurti masyva (50 ilgumo) ir uzpildyti skaiciu 0;


var spinta = [];
for ( i = 0; i < 50; i++) {  //daznai naudojamas
    spinta[i] = 0;
}

console.log("Masyvas spinta: ", spinta);

//uzduotis:sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti skaiciu 1;

var kk = 0;
while ( kk < 50) {
    spinta[kk] = 1;
    kk++;
}
console.log("Masyvas (while: ", spinta);


//uzduotis: surasti kelintas zmogus yra "Rico" (naudoti While)(surasti pirmaji; sunkesne-surasti visus Rico)

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Clemente", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Claudie", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

turimeVardu = names.length;
console.log("vardu skaicius: ", turimeVardu);


masyvoIlgis = names.length;
var i = 0
while (i < masyvoIlgis) {
    if (names[i] === "Rico") {
        console.log("Rico numeris: " +i);
        break;
    }
i++
}

//uzduotis:  parasyti funkcija, kuri grazina masyvo elemento numeri


function findValueInArray( name, myArray) {
    var k = 0;
    while (k < myArray.length) {
        if (myArray[k] === name) {
            return k;
        }
        k++;
    }
}
numeris = findValueInArray("Sandi", names);
console.log("Sandi numeris: " + numeris);
console.log("Gaston numeris: " + findValueInArray("Gaston", names));

//uzduotis: rasti pavarde masyve esancio zmogaus vardu "Freida" (pirmojo)

ieskomasVardoNR = findValueInArray("Freida", names);
pavarde = lastNames[ieskomasVardoNR];
console.log("Freidos pavarde: " , pavarde);


//ilgesnis budas

i = 0
masyvoIlgis = names.length;
do {
    if (names[i] === "Rico") {
        console.log("Rico pavarde: ", lastNames [i]);
        //break;
    }


    i++;
}  while ( i < masyvoIlgis) ;

//kitas budas su while---------------------

i = 0;
masyvoIlgis = names.length;
while  (i < masyvoIlgis) {
    if (names[i] === "Rico") {}
}




















