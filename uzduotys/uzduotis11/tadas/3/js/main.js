// =================ARRAY / masyvas============

console.log("labas");


  $('h1').css("color", "red");


$(document).ready(function(){

$('.w3-row img').click(function() {
// IDEA: nusikopijuojame paspausta paveiksliuko objekta
// IDEA: that yra paveiksliuko objekto kopija
var paveikslelioObjKopija = this.cloneNode(true);
var imgParent = this.parentNode; // IDEA: paima tevini div

// IDEA: i html idedame savo html elementa (paveiksliuko kopoja)
imgParent.insertBefore(paveikslelioObjKopija,this);


  $(this).css({
  position : "absolute",
  width: "18%"
});
  $('this').animate({
    right: "25px",
    top: '0px',
    opacity: '0',
    height: '10px',
    width: '10px'
}, 2000);
});




});
// ===========================================
