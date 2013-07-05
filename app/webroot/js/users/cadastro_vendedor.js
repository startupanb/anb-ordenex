$(document).ready(function(){
	// if($('#pessoa_fisica_juridica').val() == 0){
	// 	$('#pessoa_juridica').hide();
	// 	$('#pessoa_fisica').fadeIn('fast');
	// }else if($('#pessoa_fisica_juridica').val() == 1){
	// 	$('#pessoa_fisica').hide();
	// 	$('#pessoa_juridica').fadeIn('fast');
	// }else{
	// 	$('#pessoa_fisica').fadeOut('fast');
	// 	$('#pessoa_juridica').fadeOut('fast');
	// }
	$('#campo_fisica').click(function(){
			$('#fisica_juridica').fadeOut('fast');

			$('#pessoa_fisica').fadeIn('fast');
			$('#formularios').fadeIn('slow');
	});

	$('#campo_juridica').click(function(){
			$('#fisica_juridica').fadeOut('fast');

			$('#pessoa_juridica').fadeIn('fast');
			$('#formularios').fadeIn('slow');
	});


	$("#next").click(function(){
		// $("#form_full").fadeOut('fast');
			$("#form_full").animate({
		    	left: "-=900px",
		  	}, 500 );
		  	$("#form_full").fadeIn('fast');
	});

	// $(function() {
	// 	$( "#progressbar" ).progressbar({
	// 		value: false
	// 	});
	// });





});