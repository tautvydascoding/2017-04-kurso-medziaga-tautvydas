console.log("js failas");
var
  vardas,
  pavarde,
  klase,
  vidur,
  vid,
  resul,

  vardas = "Mantas";
pavarde = "Mantaitis";
klase = "7B";
sausis = 6;
vasaris = 7;
kovas = 8;
balandis = 9;
geguze = 10;


function vidurkis(sausis, vasaris, kovas, balandis, geguze) {
  vid =  (sausis + vasaris + kovas + balandis + geguze) / 5;
  return vid;
}
resul=res2=re=vidurkis(sausis, vasaris, kovas, balandis, geguze);
console.log(vardas, pavarde, klase);
console.log("jusu pazymiai:",sausis, vasaris, kovas, balandis, geguze);
console.log("jusu vidurkis=", resul,res2,re,vid);
