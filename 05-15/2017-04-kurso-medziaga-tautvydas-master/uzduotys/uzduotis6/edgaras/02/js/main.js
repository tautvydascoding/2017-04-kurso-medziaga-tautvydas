console.log("js failas");

var
  name,
  lastName,
  klase,
  paz,
  mat1,
  mat2,
  mat3,
  mat4,
  mat5,
  sum1,
  vid,
  i;

  name = "Vardas";
  lastName = "Pavarde";
  klase = "astuntokas";
  paz = [6 , 5 , 9 , 10 , 8];
  sum1 = 0;
  m1 = 6;
  m2 = 5;
  m3 = 9;
  m4 = 10;
  m5 = 8;
  i = 5;


  console.log(name , lastName , klase, "Matematikos pazymiai: ", paz);

  // ------------------------------------------------------
console.log("--------------------------------------------------");
console.log("var. 5");

function countAverage(a1, a2, a3, a4, a5) {
  vidurkis = (a1 + a2 + a3 + a4 + a5) / 5;
  return vidurkis;
}

vid5 = countAverage (m1, m2, m3, m4, m5);
console.log("vid5: ", vid5, "vidurkis: ", vidurkis);

  // ------------------------------------------------------
console.log("--------------------------------------------------");
console.log("var. 4-neisbaiktas");

  function suma (paz) {
    return paz1 + paz2 + paz3 + paz4 + paz5;
  }

  console.log(suma (paz));

  // function vid(a , b) {
  //   return a / b;
  // }
  // console.log(vid(suma (paz), paz.length));

// ------------------------------------------------------
console.log("--------------------------------------------------");
console.log("var. 3");

function suma (a1, a2, a3, a4, a5) {
  return a1 + a2 + a3 + a4 + a5;
}

console.log(suma (m1, m2, m3, m4, m5));

function vid(a , b) {
  return a / b;
}
console.log(vid(suma(m1, m2, m3, m4, m5), paz.length));
// ------------------------------------------------------
console.log("--------------------------------------------------");
console.log("var. 2");

sum2 = m1 + m2 + m3 + m4 + m5;
vid2 = sum2 / 5;

console.log(sum2);
console.log(vid2);

// ------------------------------------------------------
console.log("--------------------------------------------------");
console.log("var. 1");
for (var i = 0; i < paz.length; i++) {
    sum1 += paz[i];
}

vid1 = sum1 / paz.length;

console.log(sum1);
console.log(vid1);
