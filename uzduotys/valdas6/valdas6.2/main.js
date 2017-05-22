/**
 * Created by rakuns on 2017-05-11.
 */
console.log("js failas");

var name,
    lastname,
    age,
    klase;

name = "Petriukas";
lastname = "Blogiukas";
age = 8;
klase = 2;

if(age == 8){
    console.log("antrokas", name, lastname, age);
} else {
    console.log("melagis");
}

//2-uzduotis

paz1 = 6;
paz2 = 5;
paz3 = 9;
paz4 = 10;
paz5 = 8;

function countAverage(a1, a2, a3, a4, a5) {
    vidurkis = (a1+a2+a3+a4+a5) / 5;
    return vidurkis;
}
average = countAverage(paz1, paz2, paz3, paz4, paz5);
console.log("Mokinio", "Petriukas" , "vidurkis:", average);