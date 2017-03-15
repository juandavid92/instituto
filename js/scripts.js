$(document).ready(function(){
	$('#show_reg').click(function(){
		$('.registro-show').slideDown(1000);
		$('.registro-hide').slideUp(1000);
	});
	$('#show_log').click(function(){
		$('.registro-show').slideUp(500);
		$('.registro-hide').slideDown(500);
	});
	$('.var_sesion').hover(function(){
		$('.btn-cerrar').slideDown(500);
	});
	$(".btn-cerrar").mouseleave(function(e){
   		$(".btn-cerrar").css("display", "none");
	});
});