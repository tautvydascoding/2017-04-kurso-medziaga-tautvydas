var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 6000);
}


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera
    document.documentElement.scrollTop = 0; // For IE and Firefox
}







// $(document).ready(function() {
//
//    /* activate the carousel */
//    $("#modal-carousel").carousel({interval:false});
//
//    /* change modal title when slide changes */
//    $("#modal-carousel").on("slid.bs.carousel",       function () {
//         $(".modal-title")
//         .html($(this)
//         .find(".active img")
//         .attr("title"));
//    });
//
//    /* when clicking a thumbnail */
//    $(".row .thumbnail").click(function(){
//     var content = $(".carousel-inner");
//     var title = $(".modal-title");
//
//     content.empty();
//     title.empty();
//
//   	var id = this.id;
//      var repo = $("#img-repo .item");
//      var repoCopy = repo.filter("#" + id).clone();
//      var active = repoCopy.first();
//
//     active.addClass("active");
//     title.html(active.find("img").attr("title"));
//   	content.append(repoCopy);
//
//     // show the modal
//   	$("#modal-gallery").modal("show");
//   });
//
// });
