// =================ARRAY / masyvas==========================

console.log("labas");


var paukstis = "Erelis";

function printVar() {
  paukstis = "Peleda"; // globalus kintamasis, kuris priklauso visam javascript
  var paukstis = "Varna"; //privatus kintamasis, kuris priklauso tik funkcijai
}

//console.log(paukstis);
//printVar();
//console.log("Po pakeitimo: "+ paukstis);


//kaip apsiraso funkcija i objekto vidu:

var miskas = {
  name: "Labanoras",
  width: 624,
  printWidth: function() {
    var gyvunas = "Vilkas";
    console.log("gyvunas: " + gyvunas); //spaustiname privatu funkcijos kintamaji, jo nera objekte!!!
    console.log("paukstis: " + paukstis); // spausdiname globalu kintamaji
    //console.log("Misko plotis: "+ width); //spausdiname tevo (privatu) kintamaji
    console.log("Misko plotis: " + this.width); //spausdiname tevo (privatu) kintamaji
  }
};

//this.kintamojo_pavadinimas  - nurodo, kad keisi globalu kintamaji

//miskas.printWidth(); // issikvieciam f-cija

// ================treniruosimes that===========================

var salis = {
  name: "Lietuva",
  printMiestai: function() {
    console.log("tecio name.: ", this.name);
    var that = this; // issisaugojam printMiestai funkcijos teti

    function printRajonai(name) {
      name = "Partizanai"; //privataus privatus kintamasis
      console.log("Rajonas privatus: ", name);
      console.log("Rajonas tecio: ", this.name);
      console.log("Rajonai tecio tecio: ", that.name);
    }
    name = "miestai"; //privatus
    var miestai = ["Vilnius", "Kaunas", "Alytus"];
    var rajonai = {
      name: "silainiai",
    };
    printRajonai();
  }
};

salis.printMiestai();


// ===========================================





// ===========================================
