console.log("hello");



// IDEA: uzduotis: isvesti dvi eilutes po 4 paveiksliukus i html

document.write("<h2> Galerija </h2>");

var img = '<img src="http://lol.tv3.lt/lols/images/11573_1325332014_6622/grazus-paveiksliukai-is-viso-pasaulio.jpg";alt="grazus paveikliukas" width="20%">  ';

// for(t = 0; t < 8; t++) {
// document.write(img);
// if ( t === 3) {  // IDEA: //for (g = 0 ; g < 4; g++)
// document.write("<br>");
// }
// }
//
// // IDEA:



// for (t = 0; t < 2; t++) {
//   for (g = 0; g < 4; g++) {
//     document.write(img);
//   }
//   document.write("<br>");
// }
//
// var galerija = document.querySelector(".gallery");
// galerija.style.backgroundColor = "red";
// // galerija.appendChild(img);
// galerija.innerHTML += img;
//
// for (t = 0; t < 8; t++) {
//
// galerija.innerHTML += img;
// }

// IDEA: uzduotis pakeisti h2 elemento spalva i melyna (naudojant tik js)

document.querySelectorAll("h2")[0].style.color = "blue";
// document.getElementById('id')
// document.getElementsByClassName('className')
// document.getElement('h2')

document.write("<h3> Testavimas</h3>"); // IDEA: sukuriamas ir idedamas i html
var button = createElement("div");
button.innerHTML = "<button type='text' name='OK' value= 'Spausk'>" // IDEA: sukuriamas bet neidedamas i html
galerija.appendChild(button);


// var galerija = document.querySelector(".gallery");
// galerija.style.backgroundColor = "blue";
// // galerija.appendChild(button);
// galerija.innerHTML += img;
//
// for (t = 0; t < 8; t++) {
//
// galerija.innerHTML += img;
// }

// IDEA: uzduotis
