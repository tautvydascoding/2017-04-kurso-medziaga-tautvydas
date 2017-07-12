// =================ARRAY / masyvas==========================

console.log("labas");

// Uzduotis: A) susikurti funkcija, kuri spausdina i konsole paduota  kaiciu (lengvesne uzduotis: betkoki skaiciu)
// B) Paleisti funkcija 20 kartu

// A)
function print() {
    console.log(5);
}
// B) Paleisti funkcija 20 kartu
k = 0;
while ( k < 20) {
  print();
  k++;
}
// sunkesnis varinatas, f-ja spausdina skaiciiu, kai paduodama reiksme (jeigu niekas nepaduodama: spausdina "-1")
function printNr (sk = -1) {
  console.log(sk);
}
printNr(49645645);
for ( i = 0; i < 20; i++) {
  printNr(i);
}



// ===========================================





// ===========================================
