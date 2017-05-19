// =================Patikrinimas ar veikia==========================
console.log("1-jQ-on-function-return");
console.log("===================================================");

// =================paleidziamas js tik uzkrovus html===============
$ (document).ready(function(){

// =================Patikrinimas ar veikia js========================

document.querySelector("h1").innerHTML += "1-jQ-on-function-return";
document.querySelector("h1").innerHTML += "<br>" + "===================================================";
// =================Patikrinimas ar veikia jquery====================
$ ("h1").css("color", "blue");

// =================1-jQ-on-function-return==========================

style = {
      color: "magenta",
      fontSize: "50px",
      backgroundColor: "#282C34",
      border: "solid Aquamarine 5px",
      padding: "0 25%"

};

$ ("h2").css(style);

//==================Anonimine funkcija===============================

$( "div" ).on( "click", function() {
     $( this ).css({
       width: function( index, value ) {
         return parseFloat( value ) * 1.2;
       },
       height: function( index, value ) {
         return parseFloat( value ) * 1.2;
       }
     });
});

function increaseSize (element) {
       $( element ).css({
         width: function( index, value ) {
           return parseFloat( value ) * 1.2;
         },
         height: function( index, value ) {
           return parseFloat( value ) * 1.2;
         }
       });
}

// -- trumpesnis variantas
$( "div" ).on( "click", increaseSize
);
// =================================================================











// ================js pabaiga=======================================
});
