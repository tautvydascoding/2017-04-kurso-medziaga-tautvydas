// uzduotis: isvesti dvi eilute po 4 paveiksliukus i HTML


document.write("<h2> Galerija </h2>");

var img = '<img src="https://upload.wikimedia.org/wikipedia/commons/4/47/PNG_transparency_demonstration_1.png" alt="dices width="100" height="100">';

//document.write(img);

// for (t = 0; t < 8; t++) {
//   document.write(img);
//   if (t === 3) {
//     document.write("<br>");
//   }
// }

//profesionalesnis  budas

// for (t = 0; t < 8; t++) { // didina eilutes
//   for (g = 0; g < 4; g++) { // didina stulpelius
//     document.write(img);
//   }
//   document.write("<br>");
// }
//

var galerija = document.querySelector('.gallery');
galerija.style.backgroundColor = "red";
// css .gallery {backgroundColor: "red";}
console.log(typeof(galerija));
//gallery.appendChild(img); //appendChild - ideda vaika i galerijos vidu

galerija.innerHTML += img;

for (i = 0; i < 8; i++) {
  galerija.innerHTML += img;
}


// pakeist h2 elemento spalva i melyna

var h2 = document.querySelector('h2')

h2.style.color = "blue";

document.write("<h2></h2>") // sukuria ir ikelia i html
var button = document.createElement('BUTTON'); // sukuria bet neideda i html
button.innerHTML = '<button type="text" name="ok" value="Spausk">';
galerija.appendChild(button);



// ===========================================
