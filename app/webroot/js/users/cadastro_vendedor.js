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
	

	$('#alterar_form').click(function(){

		var teste = $('#alterar_form').val();
		if( teste == "Alterar para pessoa juridíca ( Empresa )")
		{
			cp_juridica();
		}
		else
		{
			cp_fisica();
		}
	});


	$('#campo_fisica').click(function(){
		cp_fisica();
	});

	function cp_fisica()
	{
		$('#fisica_juridica').fadeOut('fast');
		$('#titulo').html("Cadastro Pessoa Física");
		$('#alterar_form').val("Alterar para pessoa juridíca ( Empresa )");
		$('#pessoa_juridica').fadeOut('fast');
		$('#pessoa_fisica').fadeIn('fast');
		$('#formularios').fadeIn('slow');
	}

	$('#campo_juridica').click(function(){
		cp_juridica();			
	});

	function cp_juridica()
	{
		$('#fisica_juridica').fadeOut('fast');
		$('#titulo').html("Cadastro Empresa");
		$('#alterar_form').val("Alterar para pessoa fisíca");
		$('#pessoa_fisica').fadeOut('fast');
		$('#pessoa_juridica').fadeIn('fast');
		$('#formularios').fadeIn('slow');
	}






	$("#next").click(function(){
			$("#form_full").animate({
		    	left: "-=900px",
		  	}, 500 );
		  	$("#form_full").fadeIn('fast');
		  	$("#next").css('display','none');
		  	$("#prev").css('display','block');
	});

	$("#prev").click(function(){
			$("#form_full").animate({
		    	left: "0px",
		  	}, 500 );
		  	$("#form_full").fadeIn('fast');
		  	$("#next").css('display','block');
		  	$("#prev").css('display','none');
	});

	jQuery(function($){
	   $("#PessoaJuridicaCnpj").mask("99.999.999/9999-99");
	   $("#PessoaFisicaCpf").mask("999.999.999-99");
	   $("#PessoaFisicaDataNascimento").mask("99.99.9999");
	   $(".telefone").mask("(99) ?9999-9999");
// jQuery Masked Input
		$('.telefone').mask("(99) 9999-9999?9").ready(function(event) {
		    var target, phone, element;
		    target = (event.currentTarget) ? event.currentTarget : event.srcElement;
		    phone = target.value.replace(/\D/g, '');
		    element = $(target);
		    element.unmask();
		    if(phone.length > 10) {
		        element.mask("(99) 99999-999?9");
		    } else {
		        element.mask("(99) 9999-9999?9");  
		    }
	});
	});

});