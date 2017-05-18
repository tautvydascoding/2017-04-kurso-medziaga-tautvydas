console.log("labas");

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




  function getXimages(x) {
    for (i = 0; i < x; i++) {
      img += '<img src="https://pbs.twimg.com/profile_images/575890671350874112/lLhuNEZl.png" alt="pic2" width="10%">';
    }

    return img;
  }







});
