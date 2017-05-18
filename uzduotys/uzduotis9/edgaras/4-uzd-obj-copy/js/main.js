// IDEA: OBJEKTAI--------

console.log("\n labas: 4-uzd-obj-copy");
console.log("---------------------------------------\n\n");

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

// var karolina = Object.assign({}, zmogus);
//
// console.log(karolina);
//
// karolina.name = "karolina";
// karolina.age = 21;
// karolina.height = 165;
//
// console.log("karolina po pakeitimu: ", karolina);
//
// moteris = Object.assign({}, zmogus);
//
// console.log("moteris: ", moteris);
//
// moteris.__proto__ = zmogus;
//
// console.log("moteris.__proto: ", moteris);

// moteris = Object.create(zmogus);
// console.log("moteris Object.create: ", moteris);

// var vaikas = {};
//
// Object.assign(moteris, zmogus);
// console.log("moteris Object.assign: ", moteris, "\n\n" );
//
// moteris.name = "Ieva";
//
// console.log("moteris Object.assign: ", moteris, "\n\n" );
//
// vaikas = Object.assign(moteris, zmogus, vyras);
// console.log("vaikas Object.assign: ", vaikas);
//
// moteris.name = "Ieva";

var tevas = {
    Vardas: "Vardas",
    Pavarde: "Pavarde",
    vaikas: "Egle"
    };

var dukra = {
    Klase: 8,
    Vardas: "Egle"
    };

var sunus =  {
  Klase: 8,
  Vardas: "Justas"
  };

tevas.vaikas = [];
tevas.vaikas[0] = dukra;
tevas.vaikas[1] = sunus;
tevas.vaikas.push(dukra);
tevas.vaikas.push(sunus);


console.log(tevas);
// IDEA: I objekto masyva ideti kelis objektus.





// IDEA:
