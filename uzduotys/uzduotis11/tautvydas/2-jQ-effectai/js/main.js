// =================ARRAY / masyvas============

console.log("labas");

$(document).ready(function() {
  $('h1').css("color", "red");


  // img
  var img = '<img src="http://www.pngall.com/wp-content/uploads/2016/04/Tomato-PNG-Clipart.png";  alt="pomidoras raudonas apvalus" width="10%">  ';

  $(".gallery").html( getXimages(3) );

  // $('img').hide(4000); // skaicisu nurodo mikro sekundes, per keik laiko ivyks veiksmas
  // $('.gallery > img:first').show(1500);

// uzduotis : pasletpi paveiksliuka tik ta kur paspaudi
  $('img').click( function() {
      $(this).hide(2000);
      $('footer').css("height", "20px");
  } );




  function getXimages(x) {
     for (i  =0; i < x; i++ ){
       img += '<img src="http://www.pngall.com/wp-content/uploads/2016/04/Tomato-PNG-Clipart.png";  alt="pomidoras raudonas apvalus" width="10%">  ';
     }
     return img;
  }
});


// ===========================================
