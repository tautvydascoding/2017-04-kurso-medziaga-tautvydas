console.log("js failas");

var vardas,
    pavarde,
    kelintokas,
    a,
    b,
    c,
    d,
    e;

    vardas = "Jonas";
    pavarde = "jonaitis";
    kelintokas = "Penktokas";
    a = 6;
    b = 5;
    c = 9;
    d = 10;
    e = 8;


// mokinio informacija

console.log("mokinio vardas:", vardas);
console.log("mokinio pavardė:", pavarde);
console.log("mokinio klasė:", kelintokas);


// pazymiu vidurkis

function countAverage(a1, a2, a3, a4, a5) {
vidurkis = (a1 + a2 + a3 + a4 + a5)/5;
return vidurkis;
}
vid = countAverage(a, b, c, d, e);
console.log("Mokinio:", vardas, "pazymiu viduris:", vid);
