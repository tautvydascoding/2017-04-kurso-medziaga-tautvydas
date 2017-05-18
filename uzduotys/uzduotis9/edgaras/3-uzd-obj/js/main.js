// IDEA: OBJEKTAI--------

console.log("labas");

var zmogus ={
    name: "Tomas",
    lname: "Kovolas",
    age: 18,
    kuprine: ["batai", "virve", 6]
};

console.log(zmogus.name + " " + zmogus.lname + " " + zmogus.age);

// IDEA: susikurti darbuotojo objekta (vardas, pavarde, amzius, pagamintu detaliu skaicius);

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Clemente", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Rico", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Rico", "Luise", "Claudie", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

// IDEA: uzduotis: paleisti cikla ir uzpildyti "workers" masyva darbuotoju duomenimis (amzius, pagamintu detaliu skaicius - burtu keliu)

var workers = [];

for (var i = 0; i < names.length; i++) {
  // !!!!!!!!! VAR naudojame kad atmintyje sukurtu nauja kintamaji

  var worker = {
      nr: "",
      name: "",
      lname: "",
      items: ""
      };
  worker.name = names[i];
  worker.lname = lastNames[i];
  worker.nr = i;
  worker.items = Math.round(Math.random() * 100 + 200);
  workers[i] = worker;
}

function lygnr(array) {
  for (var i = 0; i < array.length; i++) {
    sp = Object.keys(myarray[i].nr).length;
    add = 2 - sp;

  }
}


function printarray(myarray) {
for (var i = 0; i < myarray.length; i++) {
  console.log("Nr. " + myarray[i].nr + " | Name " + myarray[i].name + " | Last Name " + myarray[i].lname + " | Items: " + myarray[i].items);
  }
}

printarray(workers);

Object.keys(myObject).length

function printarray(myarray) {
for (var i = 0; i < myarray.length; i++) {
  console.log("Nr. " + Object.keys(myarray[i].nr).length + " | Name " + myarray[i].name + " | Last Name " + myarray[i].lname + " | Items: " + myarray[i].items);
  }
}








// IDEA:
