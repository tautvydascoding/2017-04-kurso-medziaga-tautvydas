// =================ARRAY / masyvas==========================

console.log("labas");


// ===========================================
// uzduotis: isvesti dvi eilutes po 4 paveiksliukus i HTML

document.write("<h2> Galerija </h2>");

var img = '<img src="http://www.pngall.com/wp-content/uploads/2016/04/Tomato-PNG-Clipart.png";  alt="pomidoras raudonas apvalus" width="10%">  ';

// for (t = 0; t < 8; t++) {
//     document.write(img);
//     if ( t === 3 ) {
//       document.write("<br>");
//     }
// }

//-----

// for (t = 0; t < 5; t++) {
//     for (g = 0 ; g < 4 ; g++) {
//         document.write(img);
//     }
//     document.write("<br>");
// }

var galerija = document.querySelector(".gallery");
galerija.style.backgroundColor = "red";
// galerija.appendChild(img);
galerija.innerHTML += img;

for (t = 0; t < 8; t++) {
    galerija.innerHTML += img;
}

// ===========================================
// uzduotis: pakeisti h2 elemeneto spalva i melyna (naudojant tik js)

document.querySelectorAll("h2")[0].style.color = "blue";
// document.getElementById("id")
// document.getElementByClass("klase")
// documentgetElement("h2")

document.write("<h3> Testatvimas</h3>");    // sukuremas ir idedamas i HTML
var button = document.createElement("div"); // sukuremas, bet Neidedamas i HTML
button.innerHTML = "<button type='text' name='OK' value='Spausk'>";
galerija.appendChild(button);
