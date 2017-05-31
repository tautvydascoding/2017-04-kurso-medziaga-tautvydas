// ____________________ Navigation PersonalBlog Expand ___________________________

$(".NavPersonalBlog").on("mouseenter", function() {
  $(".charTopP").animate({
    right: '36%'
  }, 500);
  $(".charTopE").animate({
    right: '28%'
  }, 500);
  $(".charTopR").animate({
    right: '22%'
  }, 500);
  $(".charTopS").animate({
    right: '16%'
  }, 500);
  $(".charTopO").animate({
    right: '8%'
  }, 500);
  $(".charTopN").animate({
    right: '2%'
  }, 500);
  $(".charTopA").animate({
    right: '-2%'
  }, 500);
  $(".charTopL").animate({
    right: '-8%'
  }, 500);
  $(".charTopB").animate({
    right: '-16%'
  }, 500);
  $(".charTopL2").animate({
    right: '-22%'
  }, 500);
  $(".charTopO2").animate({
    right: '-28%'
  }, 500);
  $(".charTopG").animate({
    right: '-36%'
  }, 500);
});
$(".NavPersonalBlog").on("mouseleave", function() {
  $(".charTopP, .charTopE, .charTopR, .charTopS, .charTopO, .charTopN, .charTopA, .charTopL, .charTopB, .charTopL2, .charTopO2, .charTopG").stop(true, true).animate({
    right: 0
  }, 500);
});

// _____________________________Navigation Bottom Expand________________________________

$(".NavProjects, .NavProjects2").on("mouseenter", function() {
  $(".charBotP").animate({
    right: '28%'
  }, 500);
  $(".charBotR").animate({
    right: '19%'
  }, 500);
  $(".charBotO").animate({
    right: '11%'
  }, 500);
  $(".charBotJ").animate({
    right: '3%'
  }, 500);
  $(".charBotE").animate({
    right: '-3%'
  }, 500);
  $(".charBotC").animate({
    right: '-11%'
  }, 500);
  $(".charBotT").animate({
    right: '-19%'
  }, 500);
  $(".charBotS").animate({
    right: '-28%'
  }, 500);
});
$(".NavProjects, .NavProjects2").on("mouseleave", function() {
  $(".charBotP, .charBotR, .charBotO, .charBotJ, .charBotE, .charBotC, .charBotT, .charBotS").stop(true, true).animate({
    right: 0
  }, 500);
});

//______________________________Navigation Left Expand________________________________

$(".NavContact").on("mouseenter", function() {
  $(".charleftCo").animate({
    top: '5%'
  }, 500);
  $(".charleftO").animate({
    top: '12%'
  }, 500);
  $(".charleftN").animate({
    top: '20%'
  }, 500);
  $(".charleftT").animate({
    top: '30%'
  }, 500);
  $(".charleftA").animate({
    top: '39%'
  }, 500);
  $(".charleftC").animate({
    top: '47%'
  }, 500);
  $(".charleftTs").animate({
    top: '55%'
  }, 500);
});
$(".NavContact").on("mouseleave", function() {
  $(".charleftCo, .charleftO, .charleftN, .charleftT, .charleftA, .charleftC, .charleftTs").stop(true, true).animate({
    top: '30%'
  }, 500);
});

//______________________________Navigation Right Expand________________________________

$(".NavAbout").on("mouseenter", function() {
  $(".charRightT").animate({
    top: '5%'
  }, 500);
  $(".charRightU").animate({
    top: '20%'
  }, 500);
  $(".charRightO").animate({
    top: '35%'
  }, 500);
  $(".charRightB").animate({
    top: '50%'
  }, 500);
  $(".charRightA").animate({
    top: '65%'
  }, 500);
});
$(".NavAbout").on("mouseleave", function() {
  $(".charRightT, .charRightU, .charRightO, .charRightB, .charRightA ").stop(true, true).animate({
    top: '35%'
  }, 500);
});

// ------------------------------Contacts -----------------------------------------


//---------------------------------------------paral;ax------------------------------------
var scene = document.getElementById('scene');
var parallax = new Parallax(scene);
var scene = document.getElementById('scene1');
var parallax = new Parallax(scene);

//--------------------------------canvas animation-------------------------------

// function draw(){
// var canvas = $("#canvas")[0];
// var c = canvas.getContext("2d");
//
// var startX = 10;
// var startY = 10;
// var endX = 390;
// var endY = 10;
// var amount = 0;

// setInterval(function() {
//   amount += 0.05; // change to alter duration
//   if (amount > 1) amount = 1;
//   c.clearRect(0, 0, canvas.width, canvas.height);
//   c.strokeStyle = "white";
//   c.moveTo(startX, startY);
//   // lerp : a  + (b - a) * f
//   c.lineTo(startX + (endX - startX) * amount, startY + (endY - startY) * amount);
//   c.stroke();
// }, 20);
// }

function draw() {
  (function() {
    var lastTime = 0;
    var vendors = ['ms', 'moz', 'webkit', 'o'];
    for (var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
      window.requestAnimationFrame = window[vendors[x] + 'RequestAnimationFrame'];
      window.cancelAnimationFrame = window[vendors[x] + 'CancelAnimationFrame'] || window[vendors[x] + 'CancelRequestAnimationFrame'];
    }

    if (!window.requestAnimationFrame) window.requestAnimationFrame = function(callback, element) {
      var currTime = new Date().getTime();
      var timeToCall = Math.max(0, 16 - (currTime - lastTime));
      var id = window.setTimeout(function() {
          callback(currTime + timeToCall);
        },
        timeToCall);
      lastTime = currTime + timeToCall;
      return id;
    };

    if (!window.cancelAnimationFrame) window.cancelAnimationFrame = function(id) {
      clearTimeout(id);
    };
  }());



    var canvass = document.querySelector('#canvas');
    fitToContainer(canvass);

    function fitToContainer(canvas){
      // Make it visually fill the positioned parent
      canvas.style.width ='100%';
      canvas.style.height='100%';
      // ...then set the internal size to match
      canvas.width  = canvas.offsetWidth;
      canvas.height = canvas.offsetHeight;
    }


  var canvas = document.getElementById("canvas");
  var ctx = canvas.getContext("2d");
  ctx.lineCap = "round";

  // variable to hold how many frames have elapsed in the animation
  var t = 1;

  var canvasWidth = $("#canvas").width();
  var canvasHeight = $("#canvas").height();

  // define the path to plot
  var vertices = [];
  vertices.push({
    x: 10,
    y: 10
  });
  vertices.push({
    x: canvasWidth - 10,
    y: 10

  });
  vertices.push({
    x: canvasWidth-10,
    y: canvasHeight-10
  });
  vertices.push({
    x: 10,
    y: canvasHeight-10
  });
  vertices.push({
    x: 10,
    y: 10
  });


  // set some style
  ctx.lineWidth = 2.5;
  ctx.strokeStyle = "white";
  // calculate incremental points along the path
  var points = calcWaypoints(vertices);
  // extend the line from start to finish with animation
  animate(points);


  // calc waypoints traveling along vertices
  function calcWaypoints(vertices) {
    var waypoints = [];
    for (var i = 1; i < vertices.length; i++) {
      var pt0 = vertices[i - 1];
      var pt1 = vertices[i];
      var dx = pt1.x - pt0.x;
      var dy = pt1.y - pt0.y;
      for (var j = 0; j < 41; j++) {
        var x = pt0.x + dx * j / 40;
        var y = pt0.y + dy * j / 40;
        waypoints.push({
          x: x,
          y: y
        });
      }
    }
    return (waypoints);
  }


  function animate() {
    if (t < points.length - 1) {
      requestAnimationFrame(animate);
    }
    // draw a line segment from the last waypoint
    // to the current waypoint
    ctx.beginPath();
    ctx.moveTo(points[t - 1].x, points[t - 1].y);
    ctx.lineTo(points[t].x, points[t].y);
    ctx.stroke();
    // increment "t" to get the next waypoint
    t++;
  }

  $(".tlt").css("opacity","1");
  $('.tlt').textillate({ in: { effect: 'fadeInDown', shuffle: true, delay:5 } });

}

$('.NavAbout').click(function(){
    $('.canvas1').addClass('canvasSee');
});



function draw1() {
  (function() {
    var lastTime = 0;
    var vendors = ['ms', 'moz', 'webkit', 'o'];
    for (var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
      window.requestAnimationFrame = window[vendors[x] + 'RequestAnimationFrame'];
      window.cancelAnimationFrame = window[vendors[x] + 'CancelAnimationFrame'] || window[vendors[x] + 'CancelRequestAnimationFrame'];
    }

    if (!window.requestAnimationFrame) window.requestAnimationFrame = function(callback, element) {
      var currTime = new Date().getTime();
      var timeToCall = Math.max(0, 16 - (currTime - lastTime));
      var id = window.setTimeout(function() {
          callback(currTime + timeToCall);
        },
        timeToCall);
      lastTime = currTime + timeToCall;
      return id;
    };

    if (!window.cancelAnimationFrame) window.cancelAnimationFrame = function(id) {
      clearTimeout(id);
    };
  }());

//padaro canvas auksti lygu tevo auksciui. Svarbu, kad sitas kodas butu virs kodo, kuris piesia linijas
    var canvas1 = document.querySelector('#canvas1');
    fitToContainer(canvas1);

    function fitToContainer(canvas){
      // Make it visually fill the positioned parent
      canvas.style.width ='100%';
      canvas.style.height='100%';
      // ...then set the internal size to match
      canvas.width  = canvas.offsetWidth;
      canvas.height = canvas.offsetHeight;
    }


  var canvas = document.getElementById("canvas1");
  var ctx = canvas.getContext("2d");
  ctx.lineCap = "round";

  // variable to hold how many frames have elapsed in the animation
  var t = 1;

//automatiskai paima aukscio ir plocio reiksmes, kad canvas taptu responsive
  var canvasWidth = $("#canvas1").width();
  var canvasHeight = $("#canvas1").height();

  // define the path to plot
  var vertices = [];
  vertices.push({
    x: canvasWidth - 10,
    y: 10
  });
  vertices.push({
    x: 10,
    y: 10
  });
  vertices.push({
    x: 10,
    y: canvasHeight-10
  });
  vertices.push({
    x: canvasWidth-10,
    y: canvasHeight-10
  });
  vertices.push({
    x: canvasWidth - 10,
    y: 10
  });


  // set some style
  ctx.lineWidth = 2.5;
  ctx.strokeStyle = "white";
  // calculate incremental points along the path
  var points = calcWaypoints(vertices);
  // extend the line from start to finish with animation
  animate(points);


  // calc waypoints traveling along vertices
  function calcWaypoints(vertices) {
    var waypoints = [];
    for (var i = 1; i < vertices.length; i++) {
      var pt0 = vertices[i - 1];
      var pt1 = vertices[i];
      var dx = pt1.x - pt0.x;
      var dy = pt1.y - pt0.y;
      for (var j = 0; j < 41; j++) {
        var x = pt0.x + dx * j / 40;
        var y = pt0.y + dy * j / 40;
        waypoints.push({
          x: x,
          y: y
        });
      }
    }
    return (waypoints);
  }


  function animate() {
    if (t < points.length - 1) {
      requestAnimationFrame(animate);
    }
    // draw a line segment from the last waypoint
    // to the current waypoint
    ctx.beginPath();
    ctx.moveTo(points[t - 1].x, points[t - 1].y);
    ctx.lineTo(points[t].x, points[t].y);
    ctx.stroke();
    // increment "t" to get the next waypoint
    t++;
  }
  $(".tlt1").css("opacity","1");
  $('.tlt1').textillate({ in: { effect: 'fadeInDown', shuffle: true, delay:10} });
}

// ===============================PROJECTS HTML==================================


function projects() {
  (function() {
    var lastTime = 0;
    var vendors = ['ms', 'moz', 'webkit', 'o'];
    for (var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
      window.requestAnimationFrame = window[vendors[x] + 'RequestAnimationFrame'];
      window.cancelAnimationFrame = window[vendors[x] + 'CancelAnimationFrame'] || window[vendors[x] + 'CancelRequestAnimationFrame'];
    }

    if (!window.requestAnimationFrame) window.requestAnimationFrame = function(callback, element) {
      var currTime = new Date().getTime();
      var timeToCall = Math.max(0, 16 - (currTime - lastTime));
      var id = window.setTimeout(function() {
          callback(currTime + timeToCall);
        },
        timeToCall);
      lastTime = currTime + timeToCall;
      return id;
    };

    if (!window.cancelAnimationFrame) window.cancelAnimationFrame = function(id) {
      clearTimeout(id);
    };
  }());



    var canvass = document.querySelector('#canvas2');
    fitToContainer(canvass);

    function fitToContainer(canvas){
      // Make it visually fill the positioned parent
      canvas.style.width ='100%';
      canvas.style.height='100%';
      // ...then set the internal size to match
      canvas.width  = canvas.offsetWidth;
      canvas.height = canvas.offsetHeight;
    }


  var canvas = document.getElementById("canvas2");
  var ctx = canvas.getContext("2d");
  ctx.lineCap = "round";

  // variable to hold how many frames have elapsed in the animation
  var t = 1;
  //
  var canvasWidth = $("#canvas2").width();
  var canvasHeight = $("#canvas2").height();

  // define the path to plot
  var vertices = [];
  vertices.push({
    x: 10,
    y: 10
  });
  vertices.push({
    x: canvasWidth - 10,
    y: 10
  });
  vertices.push({
    x: canvasWidth-10,
    y: canvasHeight-10
  });
  vertices.push({
    x: 10,
    y: canvasHeight-10
  });
  vertices.push({
    x: 10,
    y: 10
  });


  // set some style
  ctx.lineWidth = 3;
  ctx.strokeStyle = "black";
  // calculate incremental points along the path
  var points = calcWaypoints(vertices);
  // extend the line from start to finish with animation
  animate(points);


  // calc waypoints traveling along vertices
  function calcWaypoints(vertices) {
    var waypoints = [];
    for (var i = 1; i < vertices.length; i++) {
      var pt0 = vertices[i - 1];
      var pt1 = vertices[i];
      var dx = pt1.x - pt0.x;
      var dy = pt1.y - pt0.y;
      for (var j = 0; j < 41; j++) {
        var x = pt0.x + dx * j / 40;
        var y = pt0.y + dy * j / 40;
        waypoints.push({
          x: x,
          y: y
        });
      }
    }
    return (waypoints);
  }

  function animate() {
    if (t < points.length - 1) {
      requestAnimationFrame(animate);
    }
    // draw a line segment from the last waypoint
    // to the current waypoint
    ctx.beginPath();
    ctx.moveTo(points[t - 1].x, points[t - 1].y);
    ctx.lineTo(points[t].x, points[t].y);
    ctx.stroke();
    // increment "t" to get the next waypoint
    t++;
  }
}


// ============================TweenMax========================
//
function eject(){
      var animeHeight = $('html').height()*$('html').offsetHeight;
      // animeHeight.height = animeHeight.offsetHeight;
TweenMax.staggerTo(".charBotP, .charBotR, .charBotO, .charBotJ, .charBotE, .charBotC, .charBotT, .charBotS", 1, {rotation:360}, 0.2);
}


function call(){
$('.owl-carousel').owlCarousel({
    margin:10,
    loop:true,
    // autoWidth:true,
    items:4,
    autoplay:true,
    autoplayTimeout:2000, 
    autoplayHoverPause:true,
});
}

function error(){
swal({
  title: "Coming soon!",
  // text: "Here's my error message!",
  type: "error",
  confirmButtonText: "Cool",
  confirmButtonColor: "#1b9123",
});
}
