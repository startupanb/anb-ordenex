<?php 
	// $this->Html->script('users/cadastro_vendedor'); 
$this->viewVars['requestJs'] = 'users/cadastro_vendedor';
?>






<section id="wrapper">
	<div id="fisica_juridica" class="centralizer">
		<h1>Cadastro de Vendedor</h1>
		<section class="box">
			<figure>
				<img src="<?php echo $this->webroot;?>/img/bussiness.png" width="56" height="48"/>
			</figure>
			<div class="content_box">
				<h3>Empresa <small>(Pessoa Jurídica)</small></h3>
				
				<p>Empresas que vendem na internet e buscam uma forma segura e fácil de receber pagamentos.</p>

				<input type="button" value="Cadastrar" id="campo_juridica">
			</div>
		</section>

		<section class="box">
			<figure>
				<img src="<?php echo $this->webroot;?>/img/people.png" width="56"  />
			</figure>
			<div class="content_box">
				<h3>Pessoa Física</h3>
				
				<p>Pessoas que vendem na internet e precisam receber pagamentos de forma simples e rápida.</p>

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
							echo $this->Form->input('PessoaJuridica.nome_fantasia', array('type' => 'text'));
							echo $this->Form->input('PessoaJuridica.responsavel', array('type' => 'text'));
							echo $this->Form->input('PessoaJuridica.razao_social', array('type' => 'text'));
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
					<h4>Dados e Acesso</h4>
					<?php 
							echo $this->Form->input('email', array('type' => 'text'));
							echo $this->Form->input('password', array('type' => 'password', 'Define sua senha'));
							echo $this->Form->input('cpassword', array('type' => 'password', 'label' => 'Confirme sua senha'));
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
							echo $this->Form->input('uf', array('type' => 'text'));?>
				</div>
			</div>	
			<div class="form_blocos">
				<div class="divisao_campos">
					<h4>Contatos</h4>
					<?php
						echo $this->Form->input('telefone_residencial', array('type' => 'text'));
						echo $this->Form->input('telefone_comercial', array('type' => 'text'));
						echo $this->Form->input('telefone_celular', array('type' => 'text'));
						echo $this->Form->input('site', array('type' => 'text'));
					?>
				</div>
				<div class="divisao_campos">
					<h4>Dados adicionais</h4>
					<?php
						$options = array('n' => 'Selecione', 0 => 'Não', 1 => 'Sim');

						echo $this->Form->input('Vendedor.loja_fisica', array('label' => 'Possui Loja Fisica?', 'options' => $options, 'default' => 'n'));
						echo $this->Form->input('Vendedor.retirada_local', array('label' => 'Permite a retirada no local?', 'options' => $options, 'default' => 'n'));
						echo $this->Form->input('Vendedor.segmentos_id', array('label' => 'Segmento de trabalho', 'options' => $segmentos, 'default' => 0));

						echo $this->Form->input('Referencia.1.nome', array('type' => 'text'));
						echo $this->Form->input('Referencia.1.telefone_comercial', array('type' => 'text'));
						echo $this->Form->input('Referencia.2.nome', array('type' => 'text'));
						echo $this->Form->input('Referencia.2.telefone_comercial', array('type' => 'text'));
					?>
				</div>

			</div>
		</div>
	</div>
	<?php 
		echo $this->Form->input('Enviar', array('type' => 'submit'));
				echo $this->Form->end(); ?>
<input type="button" id="next" value="Avançar">


</div>
</section>


<section>
	<div class="centralizer">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, sed, placeat, facere velit aspernatur est magnam possimus ullam odio explicabo consequuntur eum deserunt recusandae maxime qui. Nostrum nihil enim libero!</p>
	</div>
</section>



