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

for (t = 0; t < 5; t++) {
    for (g = 0 ; g < 4 ; g++) {
        document.write(img);
    }
    document.write("<br>");
}
// ===========================================
