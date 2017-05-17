console.log("labas10");

//=======================SCOPE========================

// var paukstis = "Erelis";
//
// function printVAR() {
// paukstis = "Varna";
// }
//
//
// console.log(paukstis);
// printVAR();
// console.log("po pakeitimo: ", paukstis);

//==================

var paukstis = "Erelis"; // globalus kintamasis (bendrabucio virtuveje)


function printVAR() {
  console.log(this);
  paukstis = "Peleda"; // keiciamas globalus kintamasis
  console.log("funkcijos pradzioje: " + paukstis);
  var paukstis = "Varna"; // privatus kintamasis (bendrabucio kambarys)
  this.paukstis = "Papuga"; // keiciamas globalus kintamasis
  paukstis = "Zyle"; // keiciamas privatus kintamasis
  console.log("funkcijos viduje: " + paukstis);
}
console.log(paukstis);
printVAR();
console.log("po pakeitimo: ", paukstis);

//=========================
var miskas = {
  name: "Labanoras",
  width: 624,
  printWidth: function() {
    console.log(this);
    var gyvunas = "Vilkas";
    console.log("paukstis: ", paukstis); //spauzdiname globalu kintamaji
    console.log("gyvunas: ", gyvunas); //spausdiname privatu kintamaji (sukurta kambari)
    // console.log("Misko plotis: ", width); //spausdiname tevo (privatu) kintamaji
    console.log("Misko plotis: ", this.width); //spausdiname tevo (privatu) kintamaji
  }
};

// miskas.printWidth();//iskvieciame funkcija


//=======================that========================

var salis = {
  name: "Lietuva",
  lname: "asasasf",
  printMiestai: function() {
    console.log("tecio name: ", this.name);
    var that = this; // issisaugom teva
    var name = "miestai"; //privatus
    function printRajonai() {
      var name = "Partizanai"; //privatus privatus
      console.log("Name: " + name); //privatus
      console.log("Name tecio: " + this.name); //tetis
      console.log("Name tecio tecio: " + that.name); //prosenelis
    }

    // var miestai = ["Vilnius", "Kaunas", "Alytus"];
    // var rajonai = {
    //   name: "silainiai",
    // };
    printRajonai();
  }
};

salis.printMiestai();
