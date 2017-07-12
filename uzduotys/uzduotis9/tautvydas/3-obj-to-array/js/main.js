// =================ARRAY / masyvas==========================

console.log("labas");

// Uzduotis:  susiskurti darbuotojo obj., kuris saugo varda pavvarde, amziu, pagamintu detaliu skaiciu

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Clemente", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Claudie", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];


 // Math.floor( Math.random() * 20);

 // masyvas , kuriame saugomi objektai. Kiekvienas obj saugo visa informacija apie konkretu darbuotoja
var workers = [];


// Uzduotis:  A) paleisti cikla ir uzpildyti "workers" masyva darbuotoju duomenimis (amzius ir pagamintu detaliu skaicius - burtu keliu)

for ( i = 0; i < names.length; i++) {
    // console.log("i: ", i);

    // !!!!! var naudojame, kad RAM'e / atmintyje sukurtu nauja kintamaji
    var worker = {
      name : names[i],
      lname : lastNames[i],
      nr : i,
      items : Math.floor( (Math.random() * 100) + 200)  // 200- 300
    };
 
    // issisaugau
    workers[i] = worker;
}
// i konsole atspausdiname objektu masyva
function printOgbArray(myArray) {
  i = 0;
   while ( i < myArray.length ) {
     console.log("Name: " + myArray[i].name + " \n" + "lName: " +  myArray[i].lname);
     i++;
   }
}

printOgbArray(workers);
// ===========================================





// ===========================================
