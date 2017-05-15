console.log("js failas");

var vardas = "Zilvinas",
pavarde = "Petraitis",
kelintokas = 7,
paz = [6, 5, 9, 10, 8];


if (vardas == "Zilvinas") {
  console.log("vardas teisingas");
} else {
  console.log("vardas neteisingas");
}


function vidurkis(rez1, rez2, rez3, rez4, rez5) {
  return (rez1 + rez2 + rez3 + rez4 + rez5) / 5;
}

rezultatas = vidurkis(paz[0], paz[1], paz[2], paz[3], paz[4]);

console.log("Tavo vidurkis: ", rezultatas, "– nepasiliksi antrais metais");
