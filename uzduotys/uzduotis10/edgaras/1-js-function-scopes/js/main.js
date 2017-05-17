// =================ARRAY / masyvas==========================

console.log("labas");

// IDEA: ===============SCOPE===================

var paukstis = "Erelis";

function printVar() {
  console.log("0", paukstis);
  paukstis = "Peleda";
  console.log("1", paukstis);
  var paukstis = "Varna";  // IDEA: privatus kintamasis
  console.log("2", paukstis);
  this.paukstis = "Papuga";
  console.log("2-1", paukstis);
  paukstis = "Zyle";       // IDEA: keiciamas globalus kintamasis
  console.log("3", paukstis);
}

console.log(paukstis);
printVar();
console.log("po pakeitimo: ", paukstis);
console.log("-------------------------------------");


var miskas = {
    name: "Labanoras",
    width: 624,
    printWidth: function () {
      var gyvunas = "Vilkas";
      console.log("Paukštis: ", paukstis);  // IDEA: spausdiname globalu kintamaji
      console.log("Gyvūnas: ", gyvunas);    // IDEA: spausdiname privatu kintamaji
      // console.log("Miško plotis: ", width); // IDEA: spausdiname tevo (privatu) kintamaji
      console.log("Miško plotis: ", this.width, "\n\n"); // IDEA: spausdiname tevo (privatu) kintamaji

    }
};


miskas.printWidth(); // IDEA: iskvieciame f-ja

// IDEA: ===============THAT===================

var salis =
  {
    name: "Lietuva",
    lname: "asdfasdaf",
    printMiestai: function ()
        {
          console.log("Tecio name: ", this.name);
          var that = this;
          var name = "miestai";
          function printRajonai()
                {
                  var name = "Partizanai";
                  console.log("Name privatus: ", name);
                  console.log("Name tecio: ", this.name);
                  console.log("Name tecio tecio: ", that.name);

                }
            printRajonai();
        }
  };

salis.printMiestai();


// ================SWITCH===========================






// ===========================================





// ===========================================
