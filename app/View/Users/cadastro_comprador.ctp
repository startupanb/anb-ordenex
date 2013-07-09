<?php 
	// $this->Html->script('users/cadastro_vendedor'); 
$this->viewVars['requestJs'] = 'users/cadastro_vendedor';

?>


<section id="wrapper">
	<div id="fisica_juridica" class="centralizer">
		<h1>Cadastro de Comprador</h1>
		<section class="box">
			<figure>
				<img src="<?php echo $this->webroot;?>/img/bussiness.png" width="56" height="48"/>
			</figure>
			<div class="content_box">
				<h3>Empresa <small>(Pessoa Jurídica)</small></h3>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, cumque, dolorem.</p>

				<input type="button" value="Cadastrar" id="campo_juridica">
			</div>
		</section>

		<section class="box">
			<figure>
				<img src="<?php echo $this->webroot;?>/img/people.png" width="56"  />
			</figure>
			<div class="content_box">
				<h3>Pessoa Física</h3>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, cumque, dolorem.</p>

				<input type="button" value="Cadastrar" id="campo_fisica">
			</div>
		</section>
	</div>
	<div class="clear"></div>


<div id="formularios" class="centralizer">

<?php echo $this->Form->create('User'); ?>

	<div id="form_view">
		<div id="form_full">
			<div class="form_blocos">

				<!-- DIV PESSOA JURIDICA -->
				<div class="divisao_campos">
					<div id="pessoa_juridica">
						<h4>Dados da Empresa</h4>
						<?php 
							echo $this->Form->input('PessoaJuridica.cnpj', array('type' => 'text'));
							echo $this->Form->input('PessoaJuridica.nome_fantasia<span> *</span>', array('type' => 'text'));
							echo $this->Form->input('PessoaJuridica.responsavel<span> *</span>', array('type' => 'text'));
							echo $this->Form->input('PessoaJuridica.razao_social<span> *</span>', array('type' => 'text'));
						?>
					</div>
				</div>
				<!-- FIM DA DIV PESSOA JURIDICA -->
				<!-- DIV PESSOA FISICA -->
				<div class="divisao_campos">
					<div id="pessoa_fisica">
						<h4>Dados Pessoais</h4>
						<?php 
							echo $this->Form->input('PessoaFisica.cpf', array('type' => 'text'));
							echo $this->Form->input('PessoaFisica.nome', array('type' => 'text'));
							echo $this->Form->input('PessoaFisica.data_nascimento', array('type' => 'text'));
							$options = array('n' => 'Selecione', 0 => 'Masculino', 1 => 'Feminino');
							echo $this->Form->input('PessoaFisica.sexo_m_f', array('label' => 'Sexo', 'options' => $options, 'default' => 'n'));
						?>
					</div>
				</div>
				<!-- FIM DA DIV PESSOA FISICA -->
				<div class="divisao_campos">
				</div>



				<div class="divisao_campos">
					<h4>Dados e Acesso</h4>
					<?php 
							echo $this->Form->input('email', array('type' => 'text'));
							echo $this->Form->input('password', array('type' => 'password', 'Define sua senha'));
							echo $this->Form->input('cpassword', array('type' => 'password', 'label' => 'Confirme sua senha'));
					?>
					<h4>Contatos</h4>
					<?php
						echo $this->Form->input('telefone_residencial', array('type' => 'text','class' => 'telefone'));
						echo $this->Form->input('telefone_comercial', array('type' => 'text','class' => 'telefone'));
						echo $this->Form->input('telefone_celular', array('type' => 'text','class' => 'telefone'));
						echo $this->Form->input('site', array('type' => 'text'));
					?>

				</div>
				<div class="divisao_campos">
					<h4>Endereço</h4>
					<?php 		
							echo $this->Form->input('cep', array('type' => 'text'));
							echo $this->Form->input('logradouro', array('type' => 'text'));
							echo $this->Form->input('numero', array('type' => 'text'));
							echo $this->Form->input('complemento', array('type' => 'text'));
							echo $this->Form->input('bairro', array('type' => 'text'));
							echo $this->Form->input('cidade', array('type' => 'text'));
							echo $this->Form->input('uf', array('type' => 'text'));
					?>
				</div>
			</div>	
<!-- 			<div class="form_blocos">

			</div> -->
		</div>
	</div>

	<?php // echo $this->Form->input('Enviar', array('type' => 'submit'));?>

<div id="botoes_form">
<!-- 	<input type="button" id="prev" value="Retornar ao 1º Passo <<">
	<input type="button" id="next" value="Avançar para o 2º Passo >>" /> -->
	<input type="submit" id="enviar" value="Enviar">
	<div id="erro_preenchimento">
		Existem campos obrigatórios ainda sem preenchimento!
	</div>
</div>



		<?php echo $this->Form->end(); ?>
</div>
</section>


<section>
	<div class="centralizer">

		<p class="legend_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, sed, placeat, facere velit aspernatur est magnam possimus ullam odio explicabo consequuntur eum deserunt recusandae maxime qui. Nostrum nihil enim libero!</p>
	</div>
</section>



