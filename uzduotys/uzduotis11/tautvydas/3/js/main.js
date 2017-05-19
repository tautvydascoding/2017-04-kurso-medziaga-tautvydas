// =================ARRAY / masyvas============

console.log("labas");


  $('h1').css("color", "red");


$('.w3-row img').click( function() {

      // nusikopijuojame paspausta paveiksliuko Obj
    var paveikslelioObjKopija = this.cloneNode(true);
    var imgParent = this.parentNode; // tevinis DOM elementas

    // i HTML idedame savo HTML elementa (paveikslelioObjKopija)
      imgParent.insertBefore(paveikslelioObjKopija,this);


      $(this).css({
        position : "absolute",
        width: "18%"
      });

      $(this).animate({
          width: "10px",
          height: "10px",
          opacity: 0,
          top: 0,
          right: "27px"
      }, 2000);
});

// ===========================================
