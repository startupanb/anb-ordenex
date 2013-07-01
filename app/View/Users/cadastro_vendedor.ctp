<?php 
	// $this->Html->script('users/cadastro_vendedor'); 
$this->viewVars['requestJs'] = 'users/cadastro_vendedor';
?>

<h1>Cadastro de Vendedor</h1>
<?php  
	echo $this->Form->create('User');
		$options = array('n' => 'Selecione', 0 => 'Fisica', 1 => 'Juridica');
		echo $this->Form->input('pessoa_fisica_juridica', array('id' => 'pessoa_fisica_juridica', 'label' => 'Tipo Pessoa','options' => $options, 'default' => 'n'));
?>
<!-- DIV PESSOA JURIDICA -->
<div id="pessoa_juridica">
	<?php 
		echo $this->Form->input('PessoaJuridica.cnpj', array('type' => 'text'));
		echo $this->Form->input('PessoaJuridica.nome_fantasia', array('type' => 'text'));
		echo $this->Form->input('PessoaJuridica.responsavel', array('type' => 'text'));
		echo $this->Form->input('PessoaJuridica.razao_social', array('type' => 'text'));
	?>
</div>
<!-- FIM DA DIV PESSOA JURIDICA -->

<!-- DIV PESSOA FISICA -->
<div id="pessoa_fisica">
	<?php 
		echo $this->Form->input('PessoaFisica.cpf', array('type' => 'text'));
		echo $this->Form->input('PessoaFisica.nome', array('type' => 'text'));
		echo $this->Form->input('PessoaFisica.data_nascimento', array('type' => 'text'));
		$options = array('n' => 'Selecione', 0 => 'Masculino', 1 => 'Feminino');
		echo $this->Form->input('PessoaFisica.sexo_m_f', array('label' => 'Sexo', 'options' => $options, 'default' => 'n'));
	?>
</div>
<!-- FIM DA DIV PESSOA FISICA -->
<?php 
		echo $this->Form->input('email', array('type' => 'text'));
		echo $this->Form->input('password', array('type' => 'password', 'Define sua senha'));
		echo $this->Form->input('cpassword', array('type' => 'password', 'label' => 'Confirme sua senha'));
		echo $this->Form->input('cep', array('type' => 'text'));
		echo $this->Form->input('logradouro', array('type' => 'text'));
		echo $this->Form->input('numero', array('type' => 'text'));
		echo $this->Form->input('complemento', array('type' => 'text'));
		echo $this->Form->input('bairro', array('type' => 'text'));
		echo $this->Form->input('cidade', array('type' => 'text'));
		echo $this->Form->input('uf', array('type' => 'text'));
		echo $this->Form->input('telefone_residencial', array('type' => 'text'));
		echo $this->Form->input('telefone_comercial', array('type' => 'text'));
		echo $this->Form->input('telefone_celular', array('type' => 'text'));
		echo $this->Form->input('site', array('type' => 'text'));
		

		$options = array('n' => 'Selecione', 0 => 'Não', 1 => 'Sim');

		echo $this->Form->input('Vendedor.loja_fisica', array('label' => 'Possui Loja Fisica?', 'options' => $options, 'default' => 'n'));
		echo $this->Form->input('Vendedor.retirada_local', array('label' => 'Permite a retirada no local?', 'options' => $options, 'default' => 'n'));
		echo $this->Form->input('Vendedor.segmentos_id', array('label' => 'Segmento de trabalho', 'options' => $segmentos, 'default' => 0));
		echo $this->Form->input('Enviar', array('type' => 'submit'));
	echo $this->Form->end();
?>