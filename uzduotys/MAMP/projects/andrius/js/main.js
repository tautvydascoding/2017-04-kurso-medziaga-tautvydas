console.log("labasprojektas55555");
$(document).ready(function() {

    $('#fullpage').fullpage({
      fixedElements: 'header, footer',
      anchors: ['firstPage', 'secondPage', 'thirdPage', 'fourthPage'],
      navigation: true,
      });




});


// meniu js nes kitaip nemato
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
