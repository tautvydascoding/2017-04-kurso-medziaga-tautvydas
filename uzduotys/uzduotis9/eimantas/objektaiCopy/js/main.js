var zmogus = {
  age: 0,
  height: 0,
  name: "name",
};

var moteris = {
  estrogenai: 0,
  gimdo: true,
};

var vyras = {
  testosteronas: 0,
};

//kopijuoti objektus
//Object.assign({}, zmogus);

/*var karolina = Object.assign({}, zmogus);

console.log(karolina);

karolina.name = "karolina";
karolina.age = 35;
karolina.height = "150cm";

console.log("Karolina po pakeitimu: " + karolina);*/

/* ------------------------------------ 1 budas ------------------------------------------*/

//sukuria klona su naujomis savybemis, o senas laiko "proto" skiltyje
/*moteris = Object.assign({}, zmogus);
console.log("moteris: ", moteris);*/

/* -----------------------------------2 budas ------------------------------------------*/

//visiskai nukopijuoja viska ir panaikina senas savybes
//sitas budas letas ir nerekomenduojamas
/*moteris._proto_ = zmogus;
console.log("moteris: _proto_ : ", moteris);*/

/* -----------------------------------3 budas ------------------------------------------*/

//greita kopija, kuri taip pat nukopijuoja visus duomenis nuo objekto, bet panaikina senus duomenis
/*moteris = Object.create(zmogus);
console.log("moteris: Object.crate : ", moteris);*/

/* -----------------------------------4 budas ------------------------------------------*/

//greciausias ir geriausias budas, nes sukuria zmogaus kopija ir palieka senus objekto kintamuosius
/*moteris = Object.assign(moteris, zmogus);
console.log("moteris Object.assign : ", moteris);*/


//-------------------------uzduotis--------------------------------------------------
// uzduotis: sukurti du objektus:
// Tevas: vardas, pavarde, vaikas
// Vaikas: klase, vardas
// priskirti tevo obj ta vaika (kintamajam)

var tevas = {
  vardas: "Jonas",
  pavarde: "Jonaitis",
  vaikas: "",
};

var tomas = {
  klase: 5,
  vardas: "Tomas",
};

var darius = {
  klase: 5,
  vardas: "Darius",
};

tevas.vaikas = [];

tevas.vaikas[0] = tomas;
tevas.vaikas[1] = darius;

 console.log(tevas);








//obj.arrayOne.push(arrayLetters);
