console.log("labas2");

$(document).ready(function() {
  $("h1").css("color", "red");

  //======================================1 budas

  var img = '<img src="https://pbs.twimg.com/profile_images/575890671350874112/lLhuNEZl.png" alt="pic2" width="10%">';

  // $(".gallery").html(img + img + img); //isvedam img i ekrana tris kartus siuo atveju



  //========================================2 budas
  $(".gallery").append("<div class=div1></div>"); // sukuriaus div'e su klase gallery nauja div'a su klase div1
  $(".gallery .div1").html(getXimages(4)); //paleidziam funkcija getXimages ir isvedam img i ekrana keturis kartus siuo atveju, galima dar naudot vietoje .html --> .append tada ne ant virsaus uzdes, o salia


  // $("img").hide(3000); // funkcija .hide paslepia (irasytas skaicius pasako kiek laiko vyks hide veiksmas 3000=3sekundes)
  // $(".gallery > img").show(1500); // funkcija .show parodo


  //===========uzduotis: paslepti paveiksliuka tik ta kur paspaudi

  $("img").click(function() {
    $(this).hide(2000);
    // $("footer").css("height", "20px");
  });

$("header").css("display", "none");
  $("button").on("click", function() {
    $("header").slideToggle(1000);
  });

//uzduotis: uzvedus pele ant nuotraukos ji turi tapti 50% permatoma, nuvedus vel turi tapti 100%
// 1vienas budas
// $("img").on({
//     mouseenter: function(){
//         $(this).css("opacity", "0.5");
//     },
//     mouseleave: function(){
//         $(this).css("opacity", "1");
//     },
//   });
// 2antras budas
$("img").on({
    mouseenter: function(){
        $(this).fadeTo("300", "0.5");
    },
    mouseleave: function(){
        $(this).fadeTo("0", "1");
    },
  });







  function getXimages(x) {
    for (i = 0; i < x; i++) {
      img += '<img src="https://pbs.twimg.com/profile_images/575890671350874112/lLhuNEZl.png" alt="pic2" width="10%">';
    }

    return img;
  }








  //========================FUNKCIJOS CALLBACK===========================
  //=======SU CALLBACK======

  // function suma(x, y, myFunction) {
  //   var ats = x + y;
  //   myFunction(ats);
  // }
  // var print = function(z) {
  //   console.log("Suma: " + z);
  // };
  // suma(10, 5, print);
  //=======BE CALLBACK======
  // function suma2(x, y) {
  //   var ats = x + y;
  //   return ats;
  // }
  // kk = suma2(11, 5);
  // print(kk);

});
