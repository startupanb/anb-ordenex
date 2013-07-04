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
	$('#pessoa_fisica_juridica').change(function(){
		if($(this).val() == 0){
			$('#pessoa_juridica').hide();
			$('#pessoa_fisica').fadeIn('fast');
		}else if($(this).val() == 1){
			$('#pessoa_fisica').hide();
			$('#pessoa_juridica').fadeIn('fast');
		}else{
			$('#pessoa_fisica').fadeOut('fast');
			$('#pessoa_juridica').fadeOut('fast');
		}
	});

	if($('#pessoa_fisica_juridica').val() == 0){
		$('#pessoa_juridica').hide();
		$('#pessoa_fisica').fadeIn('fast');
	}else if($('#pessoa_fisica_juridica').val() == 1){
		$('#pessoa_fisica').hide();
		$('#pessoa_juridica').fadeIn('fast');
	}else{
		$('#pessoa_fisica').fadeOut('fast');
		$('#pessoa_juridica').fadeOut('fast');
	}	

});
