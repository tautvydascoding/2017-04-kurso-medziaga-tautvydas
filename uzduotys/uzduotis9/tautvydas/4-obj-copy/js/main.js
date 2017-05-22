// =================ARRAY / masyvas==========================

console.log("labas");

var zmogus = {
  age : 0,
  heigth: 0,
  name: "Tomas"
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
// karolina.age = 35;
// karolina.age = 135;
// karolina["heigth"] = 185;
//
// console.log("karolina po pakeitimu:  " , karolina );

 // moteris =  Object.assign({}, zmogus);
 // console.log("moteris :  " , moteris );

// letas - deprekated budas
// moteris.__proto__ = zmogus;
// console.log("moteris __proto__  :  " , moteris );

// sukuria zmogaus kopija (neissaugo savo kintamuju)
// moteris = Object.create(zmogus);
// console.log("moteris  Object.create :  " , moteris );

// sukuria zmogaus kopija && palieka turimus kintamuosius
// Object.assign(moteris, zmogus);
// // Object.assign(moteris, vyras);
// console.log("moteris  Object.assign :  " , moteris );
//
// moteris.name = "Ieva";
// console.log(moteris);

// uzduotis: sukurti 2 objektus:
// 1) tevas : vardas, pavarde, vaikas
// 2) vaikas: klase, vardas
// 3) priskirti tevo objekui (kintamajam) vaika

tetis = {
  name : "Tomas",
  lname : "Komotovas"
};
sunus = {
  age : 5
};
tetis.vaikas = [];
tetis.vaikas.push( sunus);
tetis.vaikas.push( sunus);
console.log(tetis);
// ===========================================


// i konsole atspausdiname objektu masyva
function printOgbArray(myArray) {
  i = 0;
   while ( i < myArray.length ) {
     console.log("Name: " + myArray[i].name + " \n" + "lName: " +  myArray[i].lname);
     i++;
   }
}


// ===========================================
