/**
 * Created by rakuns on 2017-05-12.
 */
console.log("labas");

var kuprine = ["prozektorius" , "degtukai" , "peilis", 50];
console.log(kuprine[0], kuprine[1]);
console.log(kuprine.toString());
console.log(kuprine.join(" "));

kuprine.push("vanduo");
console.log(kuprine.toString());
kuprine.unshift("kiausiniai");
console.log(kuprine.toString());
ranka = kuprine.slice(2,3);   //copy kuprine[2]
console.log("Ranka: ", ranka);
console.log("Kuprineje liko: ", kuprine);
kuprine.splice(2,1);  //istriname elementa
console.log("Kuprineje liko: ", kuprine);

// naujas-ciklai

for ( i = 0; i < 5 ; i++) {
    //kuprine[i] = "10";
    console.log(kuprine[i]);
}

// kursime nauja masyva uzpildyta random skaiciais

skaiciai = [];
for ( k = 0; k < 50; k++) {
    skaiciai[k] = Math.round(Math.random() * 100);
}

console.log(skaiciai.toString());

//pakeisti atsitiktinius skaicius kurie yra lyginiai i "lyginis"

if ( ( skaiciai[0] % 2) === 0) {
    skaiciai[0] = "lyginis";
}
console.log( skaiciai[0]);

for ( k = 0; k < 50; k++) {
    if ( skaiciai[k] % 2 === 0) {
        skaiciai[k] = "lyginis";
    }
}

//kursime masyva su atsitiktiniais skaiciais (pagamintos detales per diena)

parts = [];

for ( k = 0; k < 150; k++) {
    teigiamas = Math.round(Math.random() * 250) + 50 ;
    neigiamas = teigiamas * (-1) ;
    if ( Math.random() < 0.1) {
        parts[k] = neigiamas;}
        else {
        parts[k] = teigiamas;
    }
}

console.log(parts.join(" "));

//uzdavinys: visus skaicius paversti teigiamais

//uzdavinys 2: surasti geriausia darbuotoja

//surasti blogiausia darbuotoja

for ( kk = 0; kk < 150; kk++) {

    //parts[kk] = Math.abs( parts[kk] ); //verciame i teigiama skaiciu


    if (parts[kk] < 0 ) {
        parts[kk] = Math.abs( parts[kk] ); //verciame i teigiama skaiciu 2 budas
    }

}
console.log(parts.join(" "));


//antras uzd

var bestWorker;
var bestResult = 0;

for ( ii = 0; ii < 150; ii++) {
    if ( parts[ii] > bestResult) {
        bestWorker = ii;
        bestResult = parts[ii];
    }
}
console.log("Geriausias rezultatas: ", bestResult);
console.log("Geriausias darbuotojas: ", bestWorker);

//3 uzduotis: surasti prasciausia darbuotoja

var badWorker;
var badResult = 300;

for ( ii = 0; ii < 150; ii++) {
    if ( parts[ii] < badResult) {
        badWorker = ii;
        badResult = parts[ii];
    }
}

console.log("Blogas rezultatas: ", badResult);
console.log("Blogas darbuotojas: ", badWorker);








