// =================Patikrinimas ar veikia==========================
console.log("3-js-gallery");
console.log("===================================================");

document.querySelector("h1").innerHTML += "<br>" + "3-js-gallery";
document.querySelector("h1").innerHTML += "<br>" + "===================================================";
// =================3-js-gallery==========================

// document.write("<h2> Galerija </h2>");
//
var img = '<img src="http://gemstoneguru.com/wp-content/uploads/2012/08/Zircon_Blue_AGTA.png" alt="akmenukai" width= "8%">';
//
// document.write(img, "<br>", "<br>", "<br>");
//
// for (var i = 0; i < 3; i++) {
//   for (var k = 0; k < 4; k++) {
//     document.write(img + "  ");
//     }
//     document.write("<br>");
// }

var galerija = document.querySelector(".gallery");
// galerija.appendChild(img);

// galerija.style.backgroundColor = "red";

console.log(typeof(galerija));
galerija.innerHTML += "<br>";

for (var i = 0; i < 3; i++) {
  for (var k = 0; k < 4; k++) {
    galerija.innerHTML += img;
    }
  galerija.innerHTML += "<br>";
}

// IDEA: document.querySelectorAll("h2") visus h2 pasirenka
// IDEA: document.getElementById("id")
// IDEA: document.getElementByClass("klase")
// IDEA: document.element("h2S")

h2 = document.querySelector("h2");
blue = h2.style.color = "blue";
h2a = h2.innerHTML += "Galerija";
// ===================================================

var btn = document.createElement("div");
btn.innerHTML = "<button type='txt' name='OK' value='Spausk'>";
h2.appendChild(btn);












// ===================================================
