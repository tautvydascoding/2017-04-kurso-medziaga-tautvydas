// =================ARRAY / masyvas============

console.log("labas");

$(document).ready(function() {


  $('h1').css("color", "red");


  $(".w3-row img").click(function() {
    //nusikopijuojame paspausto paveiksliuko objekta
    var paveikslelioObjkopija = this.cloneNode(true); // sukuria kopija
    var imgParent = this.parentNode; // paima tevini elementa DOM'o (siuo atveju paima tevini div paveikslelio)

    // i html idedame savo html elementa (paveikslelioObjkopija)
    imgParent.insertBefore(paveikslelioObjkopija, this);


    $(this).css({
      position: "absolute",
      width: "15%"
    });
    $(this).animate({
      width: "10px",
      height: "10px",
      opacity: "0",
      top: "0",
      right: "75px"
    }, 2000);
  });

  // ===========================================





});
