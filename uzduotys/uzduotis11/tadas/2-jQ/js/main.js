console.log("aloha");

// $(document).ready(function() {
//   $('h1').css("color", "red");
//
//   function suma(x, y, myFunction) {
//     var ats = x + y;
//     myFunction(ats);
//   }
//   var print = function(z) {
//     console.log("Suma: " + z);
//   };
//   suma(10, 5, print);


  // IDEA: img
  var img = '<img src="https://i.ytimg.com/vi/RSy4MpiK8i0/hqdefault.jpg" alt="katukai" width="30%"> ';
  $(".gallery").html(img + img + img);
  $("gallery").html(getXimages(3));

  $('img').hide(4000);
  $('gallery > img:first').show(1500);

  // IDEA: uzduotis : paslepti paveiksliuka tik ta kur paspaudi
  $('img').click(function functionName() {
    $(this).hide(2000);
    $('footer').css("height", "10px");
  });

  $('button').on("click", function() {
    $('header').fadeToggle(1000);
  });

  // IDEA: uzduotis: uzvedus pele ant nuotraukos ji turi tapti 50%permatoma, nuvedus vel 100%

$('.gallery img'). on({
mouseenter : function() {
  $(this).fadeTo(300, 0.5);
}, // IDEA: kablelis nes cia objektas
mouseleave  : function() {
  $(this).fadeTo(300, 1);
}


});






  //
  // function getXimages(x) {
  //   for (i = 0; i < x; i++) {
  //     img += '<img src="https://i.ytimg.com/vi/RSy4MpiK8i0/hqdefault.jpg" alt="katukai" width="10%"> ';
  //   }
  //   return img;
  // }

});
