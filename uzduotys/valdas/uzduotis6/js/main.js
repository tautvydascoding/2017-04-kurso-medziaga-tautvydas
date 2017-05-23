/**
 * Created by rakuns on 2017-05-11.
 */
console.log("js failas bandomas");

var name,
    lastName,
    age,
    single;


name = "Tom";
lastName = "Jonas";
age = 21;
single = true;

if( age > 18) {
    console.log("User is: adult");
} else {
    console.log("User is: not adult");
}

if (name == "tom") {
    console.log("User name is Tom");
}
if (age >= 21 || name == "Tom") {
    console.log("Tomai, mes turime nuolaida");
}
if (age >= 65) {
    console.log("sveikiname sulaukus")
    if (single) {
        console.log("Sveiki, nemiegokite");
    }
}
 else {
    console.log ("pensijos kaupims");
}
if (age < 14) {
    console.log("eik kakot, ponas");
} else if (age > 14 && age < 18) {
    console.log("populiarus PS zaidimai http://games.lt");
} else if (age > 18 && age < 40) {
    console.log("Geriausios studijos univere");
}
//spausdinu i ekrana

function printToCosole(x, skaicius) {
    console.log("spausdinu: ", x , skaicius);
}
printToCosole("Tadas" , 1);
