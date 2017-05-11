console.log("js failas");

vardas = "Petriukas";
pavarde = "Petraiciukas";
klase = 6;

// 1-ma uzduotis
console.log("Mokinio vardas: ", vardas);
console.log("Mokinio pavarde: ", pavarde);
console.log("Mokinio kalse: ", klase);

// 2-tra uzduotis

paz1 = 6;
paz2 = 5;
paz3 = 9;
paz4 = 10;
paz5 = 8;

function countAvarage (a1, a2, a3, a4 , a5) {
    vidurkis = (a1 + a2 + a3 + a4 + a5) / 5;
    return vidurkis;
}

vid = countAvarage(paz1, paz2, paz3, paz4, paz5);
console.log("Mokinio ", vardas, " vidurkis: ", vid, " test: ", vidurkis);
