// =================Patikrinimas ar veikia==========================
console.log("Patikrinimas ar veikia");
console.log("===================================================");

// =================paleidziamas js tik uzkrovus html (js pradzia)==
$ (document).ready(function(){

// =================Patikrinimas ar veikia js========================

document.querySelector("h2").innerHTML += "Patikrinimas ar veikia";
document.querySelector("h2").innerHTML += "<br>" + "===================================================";
// =================Patikrinimas ar veikia jquery====================
$ ("h2").css("color", "magenta");

// =================2-jQ-efects=====================================



// ================js pabaiga=======================================
});
