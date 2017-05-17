
console.log("hola");

// var zmogus = {
//   age : 0,
//   height : 0,
//   name : "name"
// };
//
// var moteris = {
//   estrogenai : 0,
//   gimdo : true
// };
//
// var vyras = {
//   testosteronas : 0,
// }

// var karolina = Object.assign({}, zmogus);
//
// console.log(karolina);
//
// karolina.name = "karolina";
// karolina.age = "25";
// karolina["height"] = 185;
// karolina.age = "130";
//
// console.log("karolina po pakeitimu: ", karolina);
//
// moteris = Object.assign({}, zmogus);
// console.log("moteris :", moteris);
//
//
// moteris = Object.create(zmogus);
// console.log("moteris Object.create : ", moteris);

// IDEA: zemiau bandomas budas sukuria zmogaus kopija neissaugo savo savybiu
// IDEA: sitas geriausias budas

// IDEA: sukuria zmogaus kopija ir palieka turimus kintamuosius

// Object.assign(moteris, zmogus);
// console.log("moteris Object.assign : ", moteris);
//
// moteris.name = "Ieva";
// console.log(moteris);

// IDEA: uzduotis: sukurti du objektus:
// IDEA: 1 tevas: vardas, pavarde. vaikas
// IDEA: 2 vaikas: klase, vardas
// IDEA: 3 priskirti tevo objektui vaika (kintamajam)

var tevas = {
  vardas : "Jonas",
  pavarde : "Jonaitis",
  sunus : "Jonukas",
};

var vaikas = {
  klase : 6,
  vardas : "Jonukas",
};

tevas.sunus = vaikas;
console.log(tevas);
