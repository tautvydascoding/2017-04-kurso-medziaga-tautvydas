// =================ARRAY / masyvas==========================

console.log("labas55555");


//======================Objektai===================
var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Clemente", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Claudie", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

// uzduotis sukurti darbuotojo objekta kuris saugo varda, pavarde, nr, pagamintu detaliu skaiciu
var worker = {
  name: "",
  lname: "",
  nr: 0,
  items: 0
};

// Math.floor(Math.random() * 10)
// uzduotis: A) paleisti cikla ir uzpildyti "workers" masyva darbuotoju duomenimis (amzius ir pagamintu detaliu skaicius burtu keliu)
// masyvas, kuriame saugomi abjektai. Kiekvienas objektas saugo visa informacija apie konkretu darbuotoja

var workers = [];
for (var i = 0; i < names.length; i++) {
  // console.log("i: ", i);
  // !!!!!!! var !!!!!!!!! ----> naudojame, kad RAM'e/ atmintyje sukurtu nauja kintamaji
  var worker = {
    name: names[i],
    lname: lastNames[i],
    nr: i,
    items: Math.floor((Math.random() * 100) + 200) //200-300
    };
  workers[i] = worker;
}

// i konsole atspauzdiname objektu masyva
function printObjArray(myArray) {
i = 0;
  while (i < myArray.length) {
    console.log("Name: " + myArray[i].name + " \n " + " lName: " + myArray[i].lname);
i++;
  }
}
printObjArray(workers); // iskvieciam i konsole funkcija printObjArray
