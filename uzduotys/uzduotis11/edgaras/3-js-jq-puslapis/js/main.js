// =================Patikrinimas ar veikia==========================
console.log("w3-template");
console.log("===================================================");

// =================paleidziamas js tik uzkrovus html===============
$ (document).ready(function(){


  $(".w3-row img").on({
      mouseenter: function() {
                    $(this).fadeTo(100, 0.8);
                  },
      mouseleave: function () {
                    $(this).fadeTo(100, 1);
                  }
  });
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!//
//                                                             //
//       IDEA: PADARYTI PILNAI VEIKIANCIA ANIMACIJA            //
//                                                             //
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!//

  $(".w3-row img").click(function() {

              // IDEA: nukopijuoja objekta ir jo teva
              var pavObjKop = this.cloneNode(true);
              var imgParent = this.parentNode;

              // IDEA: i tevo (elemento) vidu idedame elementa
              imgParent.insertBefore(pavObjKop, this);

              $(this).css({
                      position: "absolute",
                      width: "40%"
                });
              $(this).animate({
                      height: '10px',
                      width: '10px',
                      opacity: 0,
                      top: 0,
                      right: 0
              }, 2000);
  });

// $("div div div div" ".w3-row img").on({
//         click: function () {
//                 $(this).animate({
//                   position: "fixed",
//                   right: '1px',
//                   top: '1px',
//                   opacity: '0.0',
//                   height: '10px',
//                   width: '10px'
//                 }, 3000);
//               }
// });



// ================js pabaiga=======================================
});
