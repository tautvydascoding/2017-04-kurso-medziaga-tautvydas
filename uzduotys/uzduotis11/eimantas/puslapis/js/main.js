console.log("labas rytas");


//--------------padaryti, kad preke sumazetu ir nukeliautu i ekrano kampa "krepseli"

$('.w3-row img').click(function() {
  //nusikopijuoti paspausta paveiksliuko Obj
  var imgObjCopy = this.cloneNode(true); //klonuoja i atminti nukopijuota elementa
  var imgParent = this.parentNode; // tevinis DOM elementas.nukopijuoja bet jo neatvaizduoja

// i html isdedame sav html elementa (imgObjCopy)
imgParent.insertBefore(imgObjCopy,this); // ideda klona i html

  $(this).css({
    position: 'absolute',
    width: '18%'
  });

  $(this).animate({
    width: '10px',
    height: '10px',
    opacity: 0,
    top: 0,
    right: "25px"
  }, 2000);
});

// ------ turime padaryti img absolute, tada jis ziuri i ekrana ir nuotrauka nuskrieja iki jo
