// =================ARRAY / masyvas==========================

console.log("labas");


// a) uzduotis:  susikurti funkcija kuri, spauzdina i console skaiciu (lengvesne uzduotis: bet koki skaiciu)
// b) paleisti funkcija 20 kartu

// a)
function print() {
  console.log(5);
}

// b)

k= 0;
while (k < 20) {
print();
  k++;
}

// sunkesnis variantas, kai paduodama reiksme (jeigu niekas nepaduodama: == -1)

function printNr(sk = -1) {
  console.log(sk);
}
printNr(55);


for (var i = 0; i < 20; i++) {
  printNr(i);
}
