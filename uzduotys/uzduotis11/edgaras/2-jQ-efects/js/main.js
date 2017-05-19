// =================Patikrinimas ar veikia==========================
console.log("2-jQ-efects");
console.log("===================================================");

// =================paleidziamas js tik uzkrovus html===============
$ (document).ready(function(){

// =================Patikrinimas ar veikia js========================

document.querySelector("h1").innerHTML += "2-jQ-efects";
document.querySelector("h1").innerHTML += "<br>" + "===================================================";
// =================Patikrinimas ar veikia jquery====================
$ ("h1").css("color", "magenta");

// =================2-jQ-efects=====================================


$("button").on("click", function() {
    $("header").slideToggle(500);
});



var img = '<img src="https://s-media-cache-ak0.pinimg.com/736x/d0/26/ab/d026ab9c5d6b6ad2e93f68b5bf750058.jpg" alt="akmenukai" width= "8%">';

var a = img;


function spill(x = 1, y = 1) {
  for (var i = 0; i < x; i++) {
      for (var k = 0; k < y; k++) {
        a += '<img src="https://s-media-cache-ak0.pinimg.com/736x/d0/26/ab/d026ab9c5d6b6ad2e93f68b5bf750058.jpg" alt="akmenukai" width= "8%">';
        }
    a += "<br>";
    }
  return a;
}

$(".gallery").html(spill(1, 8));

// $(".gallery img").hover(fadeTo("fast", 0.15));

$(".gallery img").on({
        mouseenter: function() {
                      $(this).fadeTo(100, 0.15);
                    },
        mouseleave: function () {
                      $(this).fadeTo(100, 1);
        }
});



// $(".gallery img").hide(3000);
// $(".gallery img").show(1500);

$(".gallery img").click(function () {
  $(this).hide(3000);
});

// $(".gallery img").hover(function () {
//   $(this).fadeTo(500, 0.15);
// });



// $(".gallery img").on({
//       click: function () {
//               $("this").hide(3000);
//                 for (var i = 0; i < 10; i++) {
//                 }
//               }
// });


// function suma(x, y, myfunction) {
//   var ats = x + y;
//   myfunction(ats);
// }
//
// var print = function(z) {
//   console.log("Reiksme: ", z);
// };
//
// suma(10, 5, print);
//






// ================js pabaiga=======================================
});
