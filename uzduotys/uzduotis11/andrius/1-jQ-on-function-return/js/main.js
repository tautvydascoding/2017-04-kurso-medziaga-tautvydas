console.log("labas");

$(document).ready(function() { // kad veiktu visos funkcijos pradedam taip cia



  $("h1").css("color", "purple");


  //uzduotis:
  //sukurti js kintamaji ir jame aprasyti daug css (pakeisti color, backgroundColor, fontSize)

  var style = {
    color: "green",
    backgroundColor: "#282C34",
    fontSize: "78px",
    border: "solid 2px #A1A1A1",
    margin: "200px 500px",
    textAlign: "center"
  };

  $("h1").css(style);
  // $("h1").css("padding", "200px 450px");

//===============================GERA FUNKCIJA======================

  // $("p").on({ //"P" siuo ateveju elementui p, galima posirink koki tik norim
  //     mouseenter: function(){
  //         $(this).css("background-color", "lightgray");
  //     },
  //     mouseleave: function(){
  //         $(this).css("background-color", "lightblue");
  //     },
  //     click: function(){
  //         $(this).css("background-color", "yellow");
  //     }
  // });
  //===============================GERA FUNKCIJA======================

  // =================Anonimine funkcija pvz=========================

  // $( "div" ).on( "click", function() {
  //   $( this ).css({
  //     width: function( index, value ) {
  //       return parseFloat( value ) * 1.2;
  //     },
  //     height: function( index, value ) {
  //       return parseFloat( value ) * 1.2;
  //     }
  //   });
  // });

  // cia anonimine pavertem i funcija pavadinimu -increaseSize (suteikem jai pavadinima, kad veliauja butu galima issikviesti)
  // function increaseSize(element) {
  //   $( element ).css({
  //     width: function( index, value ) {
  //       return parseFloat( value ) * 1.2;
  //     },
  //     height: function( index, value ) {
  //       return parseFloat( value ) * 1.2;
  //     }
  //   });
  // }

  //========trumpesnis variantas

  // $("div").on("click", increaseSize(this));



});  // kad veiktu visos funkcijos uzdarom cia
