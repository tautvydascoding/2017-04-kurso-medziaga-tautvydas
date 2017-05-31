//sitas failas turi buti paciam js failo virsuje. padaro, kad js aktyvuotu tik tada, kai bus paruostas html ir css failai

//$(docuent).ready(function(){

  //============ ========================
  $("div").on("click", function() {
    $(this).css({
      width: function(index, value) {
        return parseFloat(value) * 1.2;
      },
      height: function(index, value) {
        return parseFloat(value) * 1.2;
      }
    });
  });

  function increaseSize(element) {
    $(element).css({
      width: function(index, value) {
        return parseFloat(value) * 1.2;
      },
      height: function(index, value) {
        return parseFloat(value) * 1.2;
      }
    });
  }

  // -- trumpesnis variantas
  $("div").on("click", increaseSize);
  // ===========================================

  $('h1').css("color", "purple");

  // sukurti js kintamaji ir jame aprasyti daug css (pakeisti color, backgroud, frontSize,)



  document.write('<h2>Labas</h2>');


  var style = {
    backgroundColor: '#BBBFC3',
    color: "green",
    border: "solid 2px #69C1F1"
  };

  $('h2').css(style);


  // cia rasoma pirmo kodo $(document).ready(function(){...
//});
