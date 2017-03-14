 $(document).ready(function (){

    var userFeed = new Instafeed({
        //get: 'user',
        //userId: 23031483,
	limit:'6',
	 get: 'tagged',
        tagName: 'wearerocketscience',
	template: '<li><a href="{{link}}" target="_blank"><img src="{{image}}"/></a></li>',
        accessToken: '1700060790.1677ed0.e517cf43c3f64f169ef6599c84d85263'
    });
    userFeed.run();
 
            $(".stilllink").click(function (){
                //$(this).animate(function(){
                    $('html, body').animate({
                        scrollTop: $("#still").offset().top - 90
                    }, 500);
                //});
            });
	    $(".movinglink").click(function (){
                //$(this).animate(function(){
                    $('html, body').animate({
                        scrollTop: $("#moving").offset().top - 90
                    }, 500);
                //});
            });
	     $(".fabricationlink").click(function (){
                //$(this).animate(function(){
                    $('html, body').animate({
                        scrollTop: $("#fabrication").offset().top - 90
                    }, 500);
                //});
            });
	      $(".retaillink").click(function (){
                //$(this).animate(function(){
                    $('html, body').animate({
                        scrollTop: $("#retail").offset().top - 90
                    }, 500);
                //});
            });
	      
	      	  $('#splash').hover(function() {
	     $('#slink').fadeIn();
	    $( "#slink img" ).animate({bottom: "+=500",}, 1700 ).delay(1200).animate({bottom: "+=500",}, 1700 );
	    //$('#slink').fadeOut(); 
});

	    $('img.clients1').hover(function() {
	     $('img.clients1').effect("shake")			 
});
	    $('img.clients2').hover(function() {
	     $('img.clients2').effect("shake")			 
});
	    	$('img.clients3').hover(function() {
	     $('img.clients3').effect("bounce")			 
});
		$('img.clients4').hover(function() {
	     $('img.clients4').effect("shake")			 
});
		$('img.clients5').hover(function() {
	     $('img.clients5').effect("shake")			 
});
		$('img.clients6').hover(function() {
	     $('img.clients6').effect("bounce")			 
});
		$('img.clients7').hover(function() {
	     $('img.clients7').effect("shake")			 
});
		$('img.clients8').hover(function() {
	     $('img.clients8').effect("shake")			 
});
		$('img.clients9').hover(function() {
	     $('img.clients9').effect("shake")			 
});
		$('img.clients10').hover(function() {
	     $('img.clients10').effect("shake")			 
});
	    $('img.clients11').hover(function() {
	     $('img.clients11').effect("shake")			 
});
	    $('img.clients12').hover(function() {
	     $('img.clients12').effect("shake")			 
});
	    	$('img.clients13').hover(function() {
	     $('img.clients13').effect("bounce")			 
});
		$('img.clients14').hover(function() {
	     $('img.clients14').effect("shake")			 
});
		$('img.clients15').hover(function() {
	     $('img.clients15').effect("shake")			 
});
		$('img.clients16').hover(function() {
	     $('img.clients16').effect("shake")			 
});
		$('img.clients17').hover(function() {
	     $('img.clients17').effect("bounce")			 
});
		$('img.clients18').hover(function() {
	     $('img.clients18').effect("shake")			 
});
		$('img.clients19').hover(function() {
	     $('img.clients19').effect("shake")			 
});
		$('img.clients20').hover(function() {
	     $('img.clients20').effect("bounce")			 
});
		$('img.clients21').hover(function() {
	     $('img.clients21').effect("shake")			 
});
	    $('img.clients22').hover(function() {
	     $('img.clients22').effect("bounce")			 
});
	    	$('img.clients23').hover(function() {
	     $('img.clients23').effect("shake")			 
});
		$('img.clients24').hover(function() {
	     $('img.clients24').effect("shake")			 
});
		$('img.clients25').hover(function() {
	     $('img.clients25').effect("shake")			 
});
		$('img.clients26').hover(function() {
	     $('img.clients26').effect("shake")			 
});
		$('img.clients27').hover(function() {
	     $('img.clients27').effect("bounce")			 
});
		$('img.clients28').hover(function() {
	     $('img.clients28').effect("shake")			 
});
		$('img.clients29').hover(function() {
	     $('img.clients29').effect("shake")			 
});
		$('img.clients30').hover(function() {
	     $('img.clients30').effect("bounce")			 
});
	    $('img.clients31').hover(function() {
	     $('img.clients31').effect("bounce")			 
});
	    $('img.clients32').hover(function() {
	     $('img.clients32').effect("shake")			 
});
	    	$('img.clients33').hover(function() {
	     $('img.clients33').effect("shake")			 
});
		$('img.clients34').hover(function() {
	     $('img.clients34').effect("shake")			 
});
		$('img.clients35').hover(function() {
	     $('img.clients35').effect("shake")			 
});
		$('img.clients36').hover(function() {
	     $('img.clients36').effect("shake")			 
});
		$('img.clients37').hover(function() {
	     $('img.clients37').effect("bounce")			 
});
		$('img.clients38').hover(function() {
	     $('img.clients38').effect("shake")			 
});
		$('img.clients39').hover(function() {
	     $('img.clients39').effect("shake")			 
});
		$('img.clients40').hover(function() {
	     $('img.clients40').effect("bounce")			 
});
		$('img.clients41').hover(function() {
	     $('img.clients41').effect("shake")			 
});
		$('img.clients42').hover(function() {
	     $('img.clients42').effect("shake")			 
});
		$('img.clients43').hover(function() {
	     $('img.clients43').effect("bounce")			 
});
		$('img.clients44').hover(function() {
	     $('img.clients44').effect("bounce")			 
});
		$('img.clients45').hover(function() {
	     $('img.clients45').effect("shake")			 
});
		$('img.clients46').hover(function() {
	     $('img.clients46').effect("bounce")			 
});
		$('img.clients47').hover(function() {
	     $('img.clients47').effect("shake")			 
});
		$('img.clients48').hover(function() {
	     $('img.clients48').effect("bounce")			 
});

	$("#worknav-mobile img, #worknav-mobile li").click(function() {
    $("#worknav-mobile ul").slideToggle("slow");
});

});
      
$(function () {
  var msie6 = $.browser == 'msie' && $.browser.version < 7;
  if (!msie6) {
    var top = $('h1.stillh1').offset().top - 120;
    $(window).scroll(function (event) {
      var y = $(this).scrollTop();
      if (y >= top) { $('h1.stillh1').addClass('fixed'); }
      else { $('h1.stillh1').removeClass('fixed'); }
    });
  }
});

$(function () {
  var msie6 = $.browser == 'msie' && $.browser.version < 7;
  if (!msie6) {
    var top = $('h1.movingh1').offset().top - 120;
    $(window).scroll(function (event) {
      var y = $(this).scrollTop();
      if (y >= top) { $('h1.movingh1').addClass('fixed'); }
      else { $('h1.movingh1').removeClass('fixed'); }
    });
  }
});

$(function () {
  var msie6 = $.browser == 'msie' && $.browser.version < 7;
  if (!msie6) {
    var top = $('h1.fabricationh1').offset().top - 120;
    $(window).scroll(function (event) {
      var y = $(this).scrollTop();
      if (y >= top) { $('h1.fabricationh1').addClass('fixed'); }
      else { $('h1.fabricationh1').removeClass('fixed'); }
    });
  }
});

$(function () {
  var msie6 = $.browser == 'msie' && $.browser.version < 7;
  if (!msie6) {
    var top = $('h1.retailh1').offset().top - 120;
    $(window).scroll(function (event) {
      var y = $(this).scrollTop();
      if (y >= top) { $('h1.retailh1').addClass('fixed'); }
      else { $('h1.retailh1').removeClass('fixed'); }
    });
  }
});
