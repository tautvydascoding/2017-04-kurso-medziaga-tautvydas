// =================ARRAY / masyvas==========================
console.log("sitas? ar ne");

parts = [];
for (i = 0; i < 150; i++) {
  teigiamas = Math.round(Math.random() * 200) + 1;
  neigiamas = teigiamas * (-1);
  if (Math.random() < 0.1) {
    parts[i] = neigiamas;

  } else {
    parts[i] = teigiamas;
  }
}
//parodo sarasa netvarkyta
console.log("sarasas netvarkytas: ", parts.join(" * "));

//patikrinam ar jis teigiamas (daugiau uz 0) tada nieko, o jaigu
for (i = 0; i < 150; i++) {
  if ((parts[i]) < 0) {
    parts[i] = Math.abs(parts[i]);
  } else {

  }
}
console.log(parts.join(" * "));

//surandam geriausia resultata ir jo varda (position)
var saunuolis;
var bestresult=0;
for (i=0; i< 150; i++) {
  if (parts[i]>bestresult) {
    saunuolis=i;
    bestresult=parts[i];
  }
}
console.log("Geriausias resultatas: ", bestresult);
console.log("ji pasieke darbuotojas NR: ", saunuolis);

//surandame blogiausia

var blogas;
var worstresult=Math.max(...parts);

for (i=0; i < parts.length; i++) {
  if (parts[i]<worstresult) {
    blogas=i;
    worstresult=parts[i];
  }
}
console.log("blogiausias resultatas: ", worstresult);
console.log("blogas darbuotojas NR: ", blogas);


//var darbuotojoPagamintosDetales = new Array();

//var masinosBagazine = ["atsarginisRatas", "kastuvas", "gesintuvas", "virve", "uzkurimoLaidai", "krokodilas”];
// masinosBagazine[1] = "zvejybosKede";
//masinosBagazine.push("maistas");


// console.warn("console blogai atvaizduoja isskleistus masyvus, bet gerai atvaizduoja skliaustuose []");
// masinosBagazine.splice(3, 2);
// spausdintiIKonsoleSuKomentaru("iskerpome is masyvo 2 elementus nuo trecio",masinosBagazine);
// masinosBagazine.slice(2);
// spausdintiIKonsoleSuKomentaru("iskroveme bagazine, pasilikome 2 daiktus",masinosBagazine);

//====================== begame per visa masyva  naudodami FOR ============
// for ( var i = 0; i < masinosBagazine.length; i++ ) {
//    // i = 0 -> 1 -> 2 - >
//    // tikriname kiekviena masyvo elementa
//     if( masinosBagazine[i] === "gesintuvas") {
//         masinosBagazine[i] = "zvejybosKede";
//     }
// }
// spausdintiIKonsole(masinosBagazine);
//=======WHILE
//  var i = 0;
// while ( i < masinosBagazine.length ) {
//   console.log(masinosBagazine[i]);
//   i++;
// }

// ==================MATH=========================

// var nuoVienoIkiSimto = Math.floor(Math.random() * 100) ;

// ====================FOR /   WHILE=======================
// for()
// arba
// while()

// =====sukurti masyva 100 elementu ilgio naudojant FOR
// var darbuotojoPagamintosDetales = [];
// for( var i =0; i < 100; i++ ) {
//   darbuotojoPagamintosDetales[i] = Math.floor(Math.random() * 100);
// }

//===== sukurti masyva 100 elementu ilgio naudojant WHILE
// var darbuotojoPagamintosDetales = [];
// var t = 0;
// while (darbuotojoPagamintosDetales.length < 100) {
//     darbuotojoPagamintosDetales[t] = Math.floor(Math.random() * 100);
//     t++;
// }

//===== sukurti masyva 100 elementu ilgio naudojant WHILE (2)
// var darbuotojoPagamintosDetales = new Array(100);
// while (darbuotojoPagamintosDetales.length < 100) {
//     darbuotojoPagamintosDetales.push(  Math.floor(Math.random() * 100));
// }
// spausdintiIKonsoleSuKomentaru("darbuotoju detale: ", darbuotojoPagamintosDetales);


// ===========================================





// ===========================================





// ===========================================
