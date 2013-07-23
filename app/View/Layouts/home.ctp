<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="pt-BR"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="pt-BR"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="pt-BR"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-BR"> <!--<![endif]-->
<head>
	<?php echo $this->Html->charset(); ?>
	
	<title>Valmag :: <?php echo $title_for_layout; ?></title>
	
	<meta name="title" content="">
	<meta name="description" content="">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
	<meta name="google-site-verification" content="">
	<meta name="author" content="">
	<meta name="Copyright" content="">
	
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<!-- <link rel="shortcut icon" href="/images/favicon.ico"> -->
	<!-- <link rel="apple-touch-icon" href="/images/apple-touch-icon.png"> -->
	
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
	<![endif]-->

	<?php echo $this->Html->script('modernizr'); ?>
	<?php
	if ($this->params['action'] != 'display')
		define('CURRENT_VIEW', $this->params['controller'] . '/' . $this->params['action']);
	else
		define('CURRENT_VIEW', $this->params['controller'] . '/' . $this->params['pass'][0]);
	?>

	<?php
	$cssList = array(CURRENT_VIEW);

	if (isset($this->viewVars['requestCss'])):
		$cssList[] = $this->viewVars['requestCss'];
	endif;
	?>
	<!-- COMANDO PARA CHAMAR O CSS DENTRO DO CAKE  -->
	<?php echo $this->Html->css('caminho/do/arquivo/nome-arquivo-sem-extensao'); ?>

	<!-- CARREGA O CSS DESSE LAYOUT webroot/css/home.css -->
	<?php echo $this->Html->css('home'); ?>

	<!-- ESSE LINK CHAMA O CSS DAS VIEWS -->
	<?php echo $this->Html->css($cssList); ?>
	

	<?php echo $this->fetch('meta'); ?>
	


<link href='http://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>
	<?php echo $this->Html->script('jquery.min'); ?>
	<?php echo $this->Html->script('jquery.maskedinput'); ?>
	<?php echo $this->Html->script('modernizr.custom.79639'); ?>
	
</head>

<body>
	
	<!--[if lt IE 7]>
		<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
	<![endif]-->
	
	<div id="container">
		<!-- ISSO AQUI SÃO OS ELEMENTS PARA DIVIDIR A PAGINA EM PEDAÇOS E ORGANIZAR O CODIGO, TENTA DIVIDIR DESSA FORMA View/elements-->
		<?php echo $this->element('header'); ?>
		<?php echo $this->element('menu'); ?>

		<?php //echo $this->element('pesquisa_produtos'); ?>
		
		<section class="main-content">
			<div id="contenido_general"><br/>
				<div class="wrapper">
					<!-- AQUI O CAKE RENDERIZA O CONTEUDO DAS VIEWS -->
					<?php echo $this->fetch('content'); ?>
				</div>
			</div>

		</section>
			
	<div id="divsepara"></div>
	<!-- AQUI ELE CARREGA O FOOTER QUE TBM É UM ELEMENT -->
	




	<?php echo $this->element('footer'); ?>

	<!-- AQUI O CAKE VAI RENDERIZAR OS JS -->
	<?php echo $this->fetch('script'); ?>

	<!-- ISSO AQUI É DEBUG QUE MOSTRA AS QUERIES EXECUTADAS -->
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>