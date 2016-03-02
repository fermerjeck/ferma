jQuery(document).ready(function($) {
  function setHeiHeight() {
      $('.container').css({
          height: $(window).height() + 'px'
      });
  }
  setHeiHeight(); // устанавливаем высоту окна при первой загрузке страницы
  $(window).resize( setHeiHeight ); // обновляем при изменении размеров окна

/*Конец высоты*/
/*фото...*/
$('img').addClass('responsive-img');
/*Текст к картинкам контакты*/

	var tit = $('.hidetxt').text();
  	$('.acted').append( tit );
  

  $('.foto img').hover(function() {
  	var tit = $(this).attr('hidetitle');
  	 $('.acted').hide().empty();
  	$('.acted').show().append( tit );
  	
  });

  /*Паралакс*/
  $(window).scroll(function() {
  var par = $(this).scrollTop();
  console.log(par);
  $("#logo").css({
  	"transform" :"translate3d(0px , " + par /2 + "%, .0px)",
  	"-webkit-transform" : "translate3d(0px , " + par /2 + "%, .0px)",
  	"-moz-transform" : "translate3d(0px , " + par /2 + "%, .0px)"
  });
  if ($(this).scrollTop() > 400) {
          $('.fotoin').css('visibility', 'visible').addClass('animated bounceInLeft');
          $('.textunber').css('visibility', 'visible').addClass('animated bounceInRight');
          $('.foto h3').css('visibility', 'visible').addClass('animated bounceInUp');
      }
  });
});