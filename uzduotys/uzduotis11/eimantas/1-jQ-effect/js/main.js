//$(docuent).ready(function(){

//sitas failas turi buti paciam js failo virsuje. padaro, kad js aktyvuotu tik tada, kai bus paruostas html ir css failai


//document.write("labas");

var img = '<img src="https://upload.wikimedia.org/wikipedia/commons/4/47/PNG_transparency_demonstration_1.png" alt="dices" width="150" height="100">';

// var newItem = document.createElement("LI");       // Create a <li> node
// var textnode = document.createTextNode("Water");  // Create a text node
// newItem.appendChild(textnode);                    // Append the text to <li>
//
// var list = document.getElementById("myList");    // Get the <ul> element to insert a new node
// list.insertBefore(newItem, list.childNodes[0]);  // Insert <li> before the first child of <ul>


/* --------------sukurti nauja div--------------------------------------------------*/

// var div = document.createElement('div');
// var element = document.getElementById('gallery');
// element.appendChild(div); //sukuria nauja div elementa

/* --------------sukurti nauja div--------------------------------------------------*/


$('.gallery').append("<br>",getXimages(3));

//$('.gallery > img').hide(3000); //skaicius nurodo mikro sekundes, per kiek laiko ivyks veiksmas

//$('img').show(2000);

$('img').click(function () {
  $(this).hide(2000);
});


function getXimages(x){
for (i = 0; i < x; i++) {
img += '<img src="https://upload.wikimedia.org/wikipedia/commons/4/47/PNG_transparency_demonstration_1.png" alt="dices" width="150" height="100">';
}
return img;
}

//----------- pradingstancio mygtuko padarymas ------------------------------

$('header').css('display', "none");

$('button').on("click", function(){
  $('header').slideToggle(2000);
  //$('header').fadeIn(2000);
});

$('img').on({
  mouseenter : function(){
  $(this).fadeTo(300, 0.5);
},
  mouseleave : function(){
    $(this).fadeTo(0, 1);
  }
});




//-----------------------callback---------------------------------------
// function suma(x, y, myFunction) {
//   var ats = x + y;
//   myFunction(ats);
// }
//
// var print = function(z) {
//   console.log("Suma: ", z);
// };
//
// suma(10, 5, print);
// //------------------------- lengvesnis callback ----------------------------
// function suma2(x, y) {
//   var ats = x + y;
//   return ats;
// }
//
// kk = suma2(10,2);
// print ( kk );
// console.log("Suma: ", kk);



  // cia rasoma pirmo kodo $(document).ready(function(){...
  //});
