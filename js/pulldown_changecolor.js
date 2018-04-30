/**
$(document).ready(function(){
	var a = $("#header").offset().top;
	$(document).scroll(function(){
		if($(this).scrollTop() > a)
		{   
			$('#header').css({"background":"black"}).css({"color":"white"});
		} else {
		    $('#header').css({"background":"transparent"}).css({"color":"black"});
		}
	});
});
*/
$(document).ready(function(){
	var a = $("#header").offset().top;
	$(document).scroll(function(){
		if($(this).scrollTop() > a)
		{   
			$('#header').css({"background":"black","color":"white"});
		} else {
		    $('#header').css({"background":"transparent","color":"black"});
		}
	});
});


$(document).ready(function(){
	var a = $("#header").offset().top;
	$(document).scroll(function(){
		if($(this).scrollTop() > a)
		{   
			$('ul.first > li > a').css({"color":"white"});
		} else {
		    $('ul.first > li > a').css({"color":"black"});
		}
	});
});
//pull down the phone version menu drop bar
$(document).ready(function(){
	$(".handle").click(function(){
		$("ul.first > li a").toggleClass("showing2");
		$("nav.navigation").toggleClass("showing");
	});
});