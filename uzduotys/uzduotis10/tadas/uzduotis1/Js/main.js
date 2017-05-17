//
//
// console.log("Labas");
//
// // IDEA: Scope
// var paukstis = "Erelis"; // IDEA: globalus kintamasis  (bendrabucio virtuveje)
//
//
// function printVar() {
// paukstis = "Peleda"; // IDEA: keiciamas globalus kintamasis
//   paukstis = "Varna"; // IDEA: privatus kintamasis (bendrabucio kambarys)
// this.paukstis = "Papuga"; // IDEA: keiciamas globalus kintamasis
// paukstis = "Zyle"; // IDEA: keiciamas privatus kintamasis
//
// console.log("funkcijos viduje: " + paukstis);
// }
//
// // console.log(paukstis);
// // printVar();
// // console.log("po pakeitimo: ", paukstis);
//
// var miskas = {
//   name : "Labanoras",
//   width : 624,
// prinWidth: function () {
// var gyvunas = "Vilkas";
// console.log("paukstis: ", paukstis); // IDEA: spausdiname globalu kintamaji
// console.log("gyvunas: ", gyvunas); // IDEA: spausdiname privatu kintamaji
//   // console.log("Misko plotis: ", width); // IDEA: spausdiname (tevo) privatu kintamaji
// console.log("Misko plotis: ", this.width); // IDEA: spausdiname (tevo) privatu kintamaji
// }
// };


// console.log(paukstis);
// printVar();
// console.log("po pakeitimo: ", paukstis);

var salis = {
  name : "Lietuva",
  printMiestai : function() {
    console.log("tevo name: ", this.name);
var that = this;
function printRajonai() {
 name = "Partizanai"; // IDEA: privatus privatus
 
  console.log("Name privatus: " + name);
  console.log("Name tevo: " + this.name);
  console.log("Name tevo tevo: " + that.name);
}


  printRajonai();
  }
};


salis.printMiestai();
