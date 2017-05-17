// =================OBJ-COPY==========================

console.log("labas4");


var zmogus = {
  age: 0,
  height: 0,
  name: "name"
};


var moteris = {
  estrogenai: 0,
  gimdo: true
};

var vyras = {
  testosteronas: 0
  };

// var karolina = Object.assign({}, zmogus); // nukopijuojam kintamajam karolina OBJ zmogus (cia vienas is kopijavimo budu)
//
// console.log(karolina);
//
//
// karolina.name = "karolina";
// karolina.age = 35;
// karolina.age = 50; // paima tik paskutine suteikta reiksme
// karolina["height"] = 185;
//
//
// console.log("karolina po pakeitimu: " , karolina);


// moteris = Object.assign({}, zmogus);
// console.log("moteris: " , moteris);


// letas deprekated budas
// moteris._proto_ = zmogus;
// console.log("moteris __proto__: " , moteris);

//object.create budas (sukuria zmogaus kopija, bet neisaugo savo kintamuju)
// moteris = Object.create(zmogus);
// console.log("moteris object.create: " , moteris);

//object.assign budas (sukuria zmogaus kopija ir palieka turimus kintamuosiuos)
Object.assign(moteris, zmogus);
console.log("moteris object.assign: " , moteris);

moteris.name = "Ieva";
console.log(moteris);





//uzduotis sukurti du abjektus:
// 1) tevas : vardas, pavarde, vaikas
// 2) vaikas : klase, vardas
// 3) priskirti tevo objektui ta vaika (kintamajam)


var tevas = {
  vardas: "Jonas",
  pavarde: "Kolis",
  sunus: ""
};

var vaikas = {
  klase: 5,
  vardas: "Petriukas"
};

tevas.sunus = vaikas;
