/* Author: Sammy Hubner

*/

// KONAMI CODE WOOOOOTTTT
var kkeys = [], konami = "38,38,40,40,37,39,37,39,66,65";
$(document).keydown(function(e) {
	kkeys.push( e.keyCode );
	if ( kkeys.toString().indexOf( konami ) >= 0 ){
		$(document).unbind('keydown',arguments.callee);
		$.getScript('http://www.somethinghitme.com/wp-content/themes/somethinghitme/js/snowfall.min.jquery.js',function(){
			alert("Merry Christmas");
			$(document).snowfall({flakeCount: 100, maxSpeed:10});
		});          
  }
});


$(document).ready(function() {
	$('#contentCarousel').roundabout({
		reflect:true,
		clickToFocus:false,
		btnNext: '#btnRight',
		btnPrev: '#btnLeft'
	});
	
	
	$('#btnLeft').click(function(e) {
		// get current active index
		var index = $("#nav .active").attr('id');
		index = index.replace("nav-",'');
		// go to previous index
		index = index - 1;
		if (index < 0)
			index = $('#nav li').length - 1;
		// set new nav to active
		$('#nav a').removeClass('active');
		$('#nav-'+index).addClass('active');
		// change label
		index--;
		if (index < 0)
			index = $('#nav li').length - 1;
		$(this).empty();
		$(this).append('&larr; ' + $('#nav-'+index).text());
	}).hover(function(e) {
		// get current active index
		var index = $("#nav .active").attr('id');
		index = index.replace("nav-",'');
		// go to previous index
		index--;
		if (index < 0)
			index = $('#nav li').length - 1;
		// show name of previous index
		$(this).empty();
		$(this).append('&larr; ' + $('#nav-'+index).text());
	},function(e) {
		// hide name
		$(this).empty();
		$(this).append('&larr;');
	});
	
	$('#btnRight').click(function(e) {
		// get current active index
		var index = $('#nav .active').attr('id');
		index = index.replace('nav-', '');
		// go to next index
		index++;
		if (index >= $('#nav li').length)
			index = 0;
		// set new index to active
		$('#nav a').removeClass('active');
		$('#nav-'+index).addClass('active');
		// change label
		index++;
		if (index >= $('#nav li').length)
			index = 0;
		$(this).empty();
		$(this).append($('#nav-'+index).text() + '&rarr;');
	}).hover(function(e) {
		// get current active index
		var index = $("#nav .active").attr('id');
		index = index.replace("nav-",'');
		// go to next index
		index++;
		if (index >= $('#nav li').length)
			index = 0;
		// show name of previous index
		$(this).empty();
		$(this).append($('#nav-'+index).text() + ' &rarr;');
	},function(e) {
		// hide name
		$(this).empty();
		$(this).append('&rarr;');
	});
	
	$('#nav a').click(function(e) {
		e.preventDefault();
		$('#nav a').removeClass('active');
		$(this).addClass('active');
		
		var index = $(this).parent().index();
		$('#contentCarousel').roundabout_animateToChild(index);
		return false;
	});
});





















