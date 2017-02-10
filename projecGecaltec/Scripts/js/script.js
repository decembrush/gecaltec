//[[INICIO]]CAMBIO-ESTILO-CABECERA
$(window).scroll(function(){
  var sticky = $('.cabeceraFija1'),
      scroll = $(window).scrollTop();

  if (scroll >= 100) sticky.addClass('cabeceraFija2');
  else sticky.removeClass('cabeceraFija2');
});
//[[FIN]]CAMBIO-ESTILO-CABECERA


//[[INICIO]]FULL-ALTO-DIV
//var winWidth = $(window).width();
//$(function(){
  //  $('.fullHeight').css({'height':($(document).height())+'px'});
    //$(window).resize(function(){
      //  $('.fullHeight').css({'height':($(document).height())+'px'});
    //});
//});
//[[FIN]]FULL-ALTO-DIV

//[INICIO]SCRIPT-INPUT-FILE
'use strict';

;( function ( document, window, index )
{
	var inputs = document.querySelectorAll( '.inputfile' );
	Array.prototype.forEach.call( inputs, function( input )
	{
		var label	 = input.nextElementSibling,
			labelVal = label.innerHTML;

		input.addEventListener( 'change', function( e )
		{
			var fileName = '';
			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
				label.querySelector( 'span' ).innerHTML = fileName;
			else
				label.innerHTML = labelVal;
		});

		// Firefox bug fix
		input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
		input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
	});
}( document, window, 0 ));
//[FIN]SCRIPT-INPUT-FILE

