// =================ARRAY / masyvas==========================

console.log("labas");

//============SCOPE========================
var paukstis = "Erelis";  // globalus kintamassi     (bendrabucio virtuveje)


function printVar() {
  paukstis = "Peleda";     // keiciamas globalus kintamsis
  console.log("funkcijos pradzioje: " + paukstis);
  var paukstis = "Varna";  // privatus kintamasis    (bendrabucio kambarys)
  this.paukstis = "Papuga"; // keiciamas globalus kintamsis
   paukstis = "Zyle";     // keiciamas privatus kintamsis

   console.log("funkcijos viduje: " + paukstis);
}

// console.log(paukstis);
// printVar();
// console.log("po pakeitimo: ", paukstis);

var miskas = {
  name : "Labanoras",
  width: 624,
  printWidth: function () {
    console.log(this);
    var gyvunas = "Vilkas";
    console.log("paukstis: ", paukstis);   // spausdiname globalu kintamaji
    console.log("gyvunas: ", gyvunas);     // spausdiname privatu kintamaji
    // console.log("Misko plotis: ", width);  // spausdiname tevo (privatu) kintamaji
    console.log("Misko plotis: ", this.width);  // spausdiname tevo (privatu) kintamaji
  }
};

// miskas.printWidth(); // iskvieciame f-ja



// ================that===========================

var salis = {
  name : "Lietuva",
  lname: "asdfadsf",
  printMiestai : function() {
      console.log("tecio name: ", this.name);
      var that = this; //
      var name =  "miestai";  // privatus
      function printRajonai() {
            var name = "Partizanai";    // privatus privatus

            console.log("Name privatus: " + name );        // privatus
            console.log("Name tecio: " + this.name );      // tetis
            console.log("Name tecio tecio: " + that.name ); // prosenesli
      }
      printRajonai();
  }
};

salis.printMiestai();


// ===========================================





// ===========================================
