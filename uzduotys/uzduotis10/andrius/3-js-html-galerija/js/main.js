console.log("labas10-3");



//===============================
// uzduotis: isvesti 2 eilutes po 4 paveiksliukus i HTML



document.write("<h2>Galerija55555</h2>");

var img = '<img src="http://www.pngall.com/wp-content/uploads/2016/04/Tomato-PNG-Clipart.png"; alt="pomidoras raudonas apvalus" width="10%"> ';

// for (t = 0; t < 8; t++) {
//   document.write(img);
//   if (t === 3) {
//     document.write("<br>");
//   }
// }
//==========================================

// for (t = 0; t < 4; t++) { // 5 eilutes
//     for ( g = 0; g < 4; g++) { // 4 stulpeliai
//       document.write(img); // isveda img 4 kartus
//     }
// document.write("<br>");// po 4 karto img isveda <br>
// }

//====================================================

var galerija = document.querySelector(".gallery");
galerija.style.backgroundColor = "green";
// .gallery { backgroundColor : red;}
// console.log(typeof(galerija));
// galerija.appendChild(img); // cia dar kazko truksta
galerija.innerHTML += img; // innerHTML istrina viska kas ten pries tai buvo tam elementa (uzdejus + zenkliuka neistrina)


for (t = 0; t < 8; t++) {
  galerija.innerHTML += img;
}

//===UZDUOTIS====
//pakeisti h2 spalva i melyna (naudojant tik js)


// document.querySelector("h2").style.color = "blue";
document.querySelectorAll("h2")[1].style.color = "blue"; // jeigu norima selectint visus reikia All ir dar nurodyti masyvo vieta(nes sukuria visiems h2 masyva)
// document.getElementById('id');
// document.getElementsByClassName('className');
// document.getElement("elementName");

document.write("<h3>Testavimas</h3>"); // sukuriamas ir idedamas i html
var button = document.createElement("div"); // sukuriamas, bet neidedamas i html
button.innerHTML = "<button type='text' name='OK' value='Spausk'>";
galerija.appendChild(button);
