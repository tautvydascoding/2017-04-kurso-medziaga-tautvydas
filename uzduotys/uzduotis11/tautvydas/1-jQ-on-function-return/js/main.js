// =================ARRAY / masyvas============

console.log("labas");

$(document).ready(function() { 
  $('h1').css("color", "purple");

  // uzduotis:
  // sukurti js kintamaji ir jame aprasyti daug css  (pakeisti color, backgroudColor, fontSize,)
  var style = {
    color: "magenta",
    backgroundColor: "#b53f99",
    fontSize: "78px",
    border: "solid 2px #A1A1A1",
    margin: "200px 450px"
  };
  $('h1').css(style);
  // $('h1').css("padding", "200px 450px");

  // //============Anonimine funkcija ==============
  // $( "div" ).on( "click", function() {
  //      $( this ).css({
  //        width: function( index, value ) {
  //          return parseFloat( value ) * 1.2;
  //        },
  //        height: function( index, value ) {
  //          return parseFloat( value ) * 1.2;
  //        }
  //      });
  // });
  //
  // function increaseSize (element) {
  //        $( element ).css({
  //          width: function( index, value ) {
  //            return parseFloat( value ) * 1.2;
  //          },
  //          height: function( index, value ) {
  //            return parseFloat( value ) * 1.2;
  //          }
  //        });
  // }
  //
  // // -- trumpesnis variantas
  // $( "div" ).on( "click", increaseSize(this) );
  // // ===========================================


});


// ===========================================
