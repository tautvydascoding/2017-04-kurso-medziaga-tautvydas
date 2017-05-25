// ____________________ Navigation PersonalBlog Expand ___________________________

$(".NavPersonalBlog").on("mouseenter", function(){
  $(".charTopP").animate({right: '36%'},500);
  $(".charTopE").animate({right: '28%'},500);
  $(".charTopR").animate({right: '22%'},500);
  $(".charTopS").animate({right: '16%'},500);
  $(".charTopO").animate({right: '8%'},500);
  $(".charTopN").animate({right: '2%'},500);
  $(".charTopA").animate({right: '-2%'},500);
  $(".charTopL").animate({right: '-8%'},500);
  $(".charTopB").animate({right: '-16%'},500);
  $(".charTopL2").animate({right: '-22%'},500);
  $(".charTopO2").animate({right: '-28%'},500);
  $(".charTopG").animate({right: '-36%'},500);
});
$(".NavPersonalBlog").on("mouseleave", function(){
  $(".charTopP").stop( true, true ).animate({right: 0},500);
  $(".charTopE").stop( true, true ).animate({right: 0},500);
  $(".charTopR").stop( true, true ).animate({right: 0},500);
  $(".charTopS").stop( true, true ).animate({right: 0},500);
  $(".charTopO").stop( true, true ).animate({right: 0},500);
  $(".charTopN").stop( true, true ).animate({right: 0},500);
  $(".charTopA").stop( true, true ).animate({right: 0},500);
  $(".charTopL").stop( true, true ).animate({right: 0},500);
  $(".charTopB").stop( true, true ).animate({right: 0},500);
  $(".charTopL2").stop( true, true ).animate({right: 0},500);
  $(".charTopO2").stop( true, true ).animate({right: 0},500);
  $(".charTopG").stop( true, true ).animate({right: 0},500);
});

// _____________________________Navigation Bottom Expand________________________________

$(".NavProjects").on("mouseenter", function(){
  $(".charBotP").animate({right: '28%'},500);
  $(".charBotR").animate({right: '19%'},500);
  $(".charBotO").animate({right: '11%'},500);
  $(".charBotJ").animate({right: '3%'},500);
  $(".charBotE").animate({right: '-3%'},500);
  $(".charBotC").animate({right: '-11%'},500);
  $(".charBotT").animate({right: '-19%'},500);
  $(".charBotS").animate({right: '-28%'},500);
});
$(".NavProjects").on("mouseleave", function(){
  $(".charBotP").stop( true, true ).animate({right: 0},500);
  $(".charBotR").stop( true, true ).animate({right: 0},500);
  $(".charBotO").stop( true, true ).animate({right: 0},500);
  $(".charBotJ").stop( true, true ).animate({right: 0},500);
  $(".charBotE").stop( true, true ).animate({right: 0},500);
  $(".charBotC").stop( true, true ).animate({right: 0},500);
  $(".charBotT").stop( true, true ).animate({right: 0},500);
  $(".charBotS").stop( true, true ).animate({right: 0},500);
});

//______________________________Navigation Left Expand________________________________

$(".NavContact").on("mouseenter", function(){
  $(".charleftCo").animate({top: '5%'},500);
  $(".charleftO").animate({top: '12%'},500);
  $(".charleftN").animate({top: '20%'},500);
  $(".charleftT").animate({top: '30%'},500);
  $(".charleftA").animate({top: '39%'},500);
  $(".charleftC").animate({top: '47%'},500);
  $(".charleftTs").animate({top: '55%'},500);
});
$(".NavContact").on("mouseleave", function(){
  $(".charleftCo").stop( true, true ).animate({top: '30%'},500);
  $(".charleftO").stop( true, true ).animate({top: '30%'},500);
  $(".charleftN").stop( true, true ).animate({top: '30%'},500);
  $(".charleftT").stop( true, true ).animate({top: '30%'},500);
  $(".charleftA").stop( true, true ).animate({top: '30%'},500);
  $(".charleftC").stop( true, true ).animate({top: '30%'},500);
  $(".charleftTs").stop( true, true ).animate({top: '30%'},500);
});

//______________________________Navigation Right Expand________________________________

$(".NavAbout").on("mouseenter", function(){
  $(".charRightT").animate({top: '5%'},500);
  $(".charRightU").animate({top: '20%'},500);
  $(".charRightO").animate({top: '35%'},500);
  $(".charRightB").animate({top: '50%'},500);
  $(".charRightA").animate({top: '65%'},500);
});
$(".NavAbout").on("mouseleave", function(){
  $(".charRightT").stop( true, true ).animate({top: '35%'},500);
  $(".charRightU").stop( true, true ).animate({top: '35%'},500);
  $(".charRightO").stop( true, true ).animate({top: '35%'},500);
  $(".charRightB").stop( true, true ).animate({top: '35%'},500);
  $(".charRightA").stop( true, true ).animate({top: '35%'},500);
});

//____________________________Textillate________________________________________________
