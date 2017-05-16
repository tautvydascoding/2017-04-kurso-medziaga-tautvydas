console.log("sveiki. pirmadienis");
//suskurti massyva 50 ir uzpildyti 0
stalcius = [];
for (var i = 0; i < 50; i++) {
  stalcius[i] = 0;
}
console.log(stalcius.join(" * "));

//suskurti massyva 50 naudojant WHILE ir uzpildyti 1

spinta = [];
var i = 0;
while (i < 50) {
  spinta[i] = 1;
  i++;
}
console.log("massyvas pagamintas su WHILE: ", spinta.join(" & "));


//surasti kelintas zmogus yra "Rico"

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Clemente", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Aja", "Griselda", "Luise", "Claudie", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

visovardu = names.length;
console.log("vardu turime: ", visovardu);

for (var i = 0; i < visovardu; i++) {
  if (names[i] === 'Rico') {
    console.log("Riko pozicija yra: ", i);
  }
}
console.log('Dabar dirba WHILE ciklas! ;)');
var i = 0;
while (i < visovardu) {
  if (names[i] === 'Rico') {

    console.log("Rico pozicija su WHILE: ", i);
    break;
  }
  console.log("vardas: ", i, names[i]);
  i++;
}

//parasyti funkcija, kuri grazina elemento pozicija

function suraskpozicija(name, myArray) {
  var k = 0;
  var ilgis = myArray.length;

  while (k < ilgis) {
    if (myArray[k] === name) {
      return k;
    }
    k++;
  }
  return "neradom tokio";
}
pozicija = suraskpozicija("Piper", names);
console.log("Vardas:  yra pozicijoje: ", pozicija);

//mano trumpas variantas
  console.log("pavarde yra:", lastNames[pozicija]);

//aba taip
vardoNR=suraskpozicija("Piper", names);
pavarde=lastNames[vardoNR];
console.log("Pavarde bus: ", pavarde);

//ilgesnis sprendimas
i=0;
masilgis=names.length;
vardopos=0;
do {
  if (names[i]==="Aja") {
    console.log("pavarde is saraso", lastNames[i]);
    vardopos=i;
    //break;
  }
  i++;
} while (i<masilgis);

//dar budas
i=0;
while (i<masilgis){
  if (names[i]==="Aja") {
    console.log("Aja pavarde: ", lastNames[i]);
  }
  i++;
}
