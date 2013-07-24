$(document).ready(function(){


		$("#enviar").css('display','none');

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
				$("#erro_preenchimento").css('border','1px solid green');
				$("#erro_preenchimento").css('background','#7AFFA6');
				$("#erro_preenchimento").html('Todos os campos estão preenchidos!');
				$("#enviar").css('display','block');
				$("#enviar").css('margin-left','0');
			}
			else
			{
				$("#enviar").css('display','none');
				$("#erro_preenchimento").html('Existem campos obrigatórios ainda sem preenchimento!');
				$("#erro_preenchimento").css('border','1px solid #D84D4D');
				$("#erro_preenchimento").css('background','#FA9A9A');
			}
		}

		$('#UserCadastroCompradorForm input').blur(function(){
				primeiraParte();
		});

		// $('#UserCadastroVendedorForm select').blur(function(){
		// 		primeiraParte();	
		// });	


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
			$('#PessoaJuridicaPessoaFisicaJuridica').val('1');
	});

	function cp_fisica()
	{
		$('#fisica_juridica').fadeOut('fast');
		$('#titulo').html("Cadastro Pessoa Física");
		$('#alterar_form').val("Alterar para pessoa juridíca ( Empresa )");
		$('#pessoa_juridica').fadeOut('fast');
		$('#pessoa_fisica').fadeIn('fast');
		$('#formularios').fadeIn('slow');
		$('#UserPessoaFisicaJuridica').val('0');
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
		$('#UserPessoaFisicaJuridica').val('1');
	}
	// ALTERA FORM PESSOA FISICA E JURIDICA ////////


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