/* sukurt komanda kuri i konsole iskviestu skaiciu ir funkcija, kuri ta skaiciu iskvietu 20 kartu

//susikurt funkcija kaz isspausdintu kazkoki nr
function print() {
  console.log(5);
}

//paleist funkcija print 20 kartu
k = 0
while (k < 20) {
  print();
  k++
}

//sunkesnis variantas, kai randama reiksme (jeigu niekas nepaduoda: == -1)
function printNr(sk = -1) {
  console.log(sk);
}

printNr(500)

for ( i = 0; i < 20; i++){
  printNr(i);
}

*/

//---------------------------------- objektai ----------------------------------------

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Clemente", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Claudie", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];


console.log("labas");

/*names.forEach(function(value, index) {
  console.log(value, index);
});*/

//var name = prompt("ivesk varda");


//susikurti darbuotojo objekta, kuris saugo varda, pavarde, amziu, pagaminta detaliu skaiciu



/*var worker = {
  name: "",
  lastName: "",
  listNr: 0,
  parts: 0,
};*/

/*


//Math.random(Math.round()*20);
//!!! var naudojame, kad RAM atmintyje sukurtu nauja kintamaji
var workers = [];

// Uzduotis: A) paleisti cikla ir uzpildyti "workers" masyva duomenimis (amzius ir pagamintu detaliu skaicius - burtu keliu)

for (i = 0; i < names.length; i++) {
  var worker = {
    wName: names[i],
    lName: lastNames[i],
    listNr: i,
    partsMade: Math.round(Math.random() * 100),
  };
  workers.push(worker);
}

console.log(workers);

// i konsole ispausdinti objektu masyva

function printObjArray(workers) {
  i = 0;
  while (i < workers.length) {
    console.log("Name: " + workers[i].wName + " \n" + "lName: " + workers[i].lName);
    i++;
  }
}
printObjArray(workers);

// perkelia i nauja eilut " \n"

*/
