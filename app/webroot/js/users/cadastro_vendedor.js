$(document).ready(function(){

	// VALIDAÇÃO //////////  VENDEDOR  ///////////////////////////
		$("#next").css('display','none');
		$("#enviar").css('display','none');

		var marcacao = 1;
		function primeiraParte()
		{

			var envio;
			var p1 = new Array();
			
			p1.push($('#UserEmail').val());
			p1.push($('#UserPassword').val());
			p1.push($('#UserCpassword').val());
			p1.push($('#UserCep').val());
			p1.push($('#UserLogradouro').val());
			p1.push($('#UserNumero').val());
			p1.push($('#UserBairro').val());
			p1.push($('#UserCidade').val());
			p1.push($('#UserUf').val());

			var tituloh1 = $('#titulo').html();


			if( tituloh1 == 'Cadastro Empresa')
			{
				p1.push($('#PessoaJuridicaCnpj').val());
				p1.push($('#PessoaJuridicaRazaoSocial').val());
				p1.push($('#PessoaJuridicaResponsavel').val());
			}
			else
			{
				p1.push($('#PessoaFisicaCpf').val());
				p1.push($('#PessoaFisicaNome').val());
				p1.push($('#PessoaFisicaDataNascimento').val());
				p1.push($('#PessoaFisicaSexoMF').val());
			}

			var qtd = p1.length;
			var flag = 1;
			for (var i in p1)
			{
				
				if(p1[i] != '')
				{
					flag++;
				}

			}

			if( flag > qtd)
			{
				$("#next").css('display','block');
				$("#erro_preenchimento").css('border','1px solid green');
				$("#erro_preenchimento").css('background','#7AFFA6');
				$("#erro_preenchimento").html('Todos os campos estão preenchidos!');
			}
			else
			{
				$("#next").css('display','none');
				$("#erro_preenchimento").html('Existem campos obrigatórios ainda sem preenchimento!');
				$("#erro_preenchimento").css('border','1px solid #D84D4D');
				$("#erro_preenchimento").css('background','#FA9A9A');
			}
		}

		function segundaParte()
		{
			var p2 = new Array();
			p2.push($('#UserTelefoneResidencial').val());
			p2.push($('#VendedorLojaFisica option:selected').val());
			p2.push($('#VendedorRetiradaLocal option:selected').val());
			p2.push($('#VendedorSegmentosId option:selected').val());

			var qtd = p2.length;
			var flag = 1;
			for (var i in p2)
			{
				if(p2[i] != '' && p2[i] != '(__) ____-_____' && p2[i] != 'n')
				{
					flag++;
				}
			}

			// alert('QTD='+qtd+'FLAG='+flag);

			if( flag > qtd)
			{
				$("#enviar").css('display','block');
				$("#erro_preenchimento").css('border','1px solid green');
				$("#erro_preenchimento").css('background','#7AFFA6');
				$("#erro_preenchimento").html('Todos os campos estão preenchidos!');
			}
		}
		
		$('#UserCadastroVendedorForm input').blur(function(){
			// alert(marcacao);
			if(marcacao == 1)
			{
				primeiraParte();	
			}
			else
			{
				segundaParte();
			}
		});

		$('#UserCadastroVendedorForm select').blur(function(){
			if(marcacao == 1)
			{
				primeiraParte();	
			}
			else
			{
				segundaParte();
			}
		});	
	// VALIDAÇÃO /////////////////////////////////////



	// EXIBI FORM NA HOME ///////////////////////
	$('#cadastrese').click(function(){
		$('#form_cadastro').fadeIn('slow');
	});
	// EXIBI FORM NA HOME ///////////////////////



	// ALTERA FORM PESSOA FISICA E JURIDICA ////////
	$('#alterar_form').click(function(){
		var alterar = $('#alterar_form').val();
		if( alterar == "Alterar para pessoa juridíca ( Empresa )")
		{
			cp_juridica();
		}
		else
		{
			cp_fisica();
		}

		primeiraParte();
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
	// ALTERA FORM PESSOA FISICA E JURIDICA ////////


	$("#next").click(function(){
			$("#form_full").animate({
		    	left: "-=900px",
		  	}, 500 );
		  	$("#form_full").fadeIn('fast');
		  	$("#next").css('display','none');
		  	$("#prev").css('display','block');
		  	$("#erro_preenchimento").html('Existem campos obrigatórios ainda sem preenchimento!');
			$("#erro_preenchimento").css('border','1px solid #D84D4D');
			$("#erro_preenchimento").css('background','#FA9A9A');
			segundaParte();
			$('#alterar_form').css('display','none');
			marcacao = 2;
	});

	$("#prev").click(function(){
			$("#form_full").animate({
		    	left: "0px",
		  	}, 500 );
		  	$("#form_full").fadeIn('fast');
		  	$("#next").css('display','block');
		  	$("#prev").css('display','none');
		  	$("#enviar").css('display','none');
		  	$('#alterar_form').css('display','block');
		  	primeiraParte();
		  	marcacao = 1;
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