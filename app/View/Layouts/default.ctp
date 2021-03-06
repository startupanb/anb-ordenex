
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="pt-BR"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="pt-BR"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="pt-BR"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-BR"> <!--<![endif]-->
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<head>
	<?php echo $this->Html->charset(); ?>
	
	<title><?php echo $title_for_layout; ?></title>
	
	<meta name="title" content="">
	<meta name="description" content="">
	
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
	
	<?php echo $this->element('header'); ?>

	<?php echo $this->Html->css('style_default'); ?>

	<link href='http://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>
	<?php echo $this->Html->script('jquery.min'); ?>
	<?php echo $this->Html->script('jquery.maskedinput'); ?>
	<?php echo $this->Html->script('modernizr.custom.79639'); ?>
	

	
</head>

<body>
	
	<!--[if lt IE 7]>
		<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
	<![endif]-->
	

		<header>
			<div class="centralizer">

				<?php echo $this->Html->image('logo.png'); ?>
				<nav>
					<ul>
						<li class="current"><a href="#">Portfolio</a></li>
						<li><a href="#">Illustration</a></li>
						<li><a href="#">Web Design</a></li>
						<li><a href="#">Print Media</a></li>
						<li><a href="#">Graphic Design</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<div class="clear"></div>









		
		<section>
			<div>
				<?php echo $this->fetch('content'); ?>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</section>
		


		<footer>
			<div class="line1">
				<div class="centralizer">
					<div class="channel_ft">
						<h3>Central de Informações</h3>
						<ul>
							<li><a href="">Sobre a Ordenex</a></li>
							<li><a href="">Como Comprar</a></li>
							<li><a href="">Como Vender</a></li>
							<li><a href="">Termo de uso & Privacidade</a></li>
							<li><a href="">Sobre a Ordenex</a></li>
							<li><a href="">Como Comprar</a></li>
							<li><a href="">Como Vender</a></li>
							<li><a href="">Termo de uso & Privacidade</a></li>
						</ul>
					</div>
					<div class="channel_ft">
						<h3>Ordenex na Prática</h3>
						<ul>
							<li><a href="">Cadastro de Compradores</a></li>
							<li><a href="">Cadastro de Vendedores</a></li>
							<li><a href="">Parceiros</a></li>
							<li><a href="">Fale Conosco</a></li>
							<li><a href="">Cadastro de Compradores</a></li>
							<li><a href="">Cadastro de Vendedores</a></li>
							<li><a href="">Parceiros</a></li>
							<li><a href="">Fale Conosco</a></li>
						</ul>
					</div>
					<div class="channel_ft">
						<p>Compartilhe</p>
						<ul class="midia_parce">
							<li><a href="">
								<?php echo $this->Html->image('facebook.png', array('width' => '40')); ?></a>
							</li> 
							<li><a href="">
								<?php echo $this->Html->image('twitter.png', array('width' => '40')); ?></a>
							</li> 
							<li><a href="">
								<?php echo $this->Html->image('youtube.png', array('width' => '40')); ?></a>
							</li> 
						</ul>
						<p>Parceiros</p>
						<ul class="midia_parce">
							<li><a href="">
<?php echo $this->Html->image('ms_bizpark.png', array('width' => '100')); ?></a>
							</li> 
							<li><a href="">
<?php echo $this->Html->image('akatus_selo.png', array('width' => '100')); ?>
</a>
							</li> 
						</ul>
					</div>
				</div>
			</div>
			<div class="line2">
				<div class="centralizer">
					<div class="line_left">
						<ul>
							<li><a href=""><?php echo $this->Html->image('logo_rodape.png', array('width' => '70')); ?></a></li> 
							<li><a href="">Design</a></li>
							<li><a href="">MediaGraphic</a></li>
							<li><a href="">DesignPrint</a></li>
							<li><a href="">llustrationWeb</a></li>
							<li><a href="">PortfolioI</a></li>
						</ul>
					</div>
					<div class="line_right">

					</div>
				</div>	
			</div>
			<div class="line3">
				<div class="centralizer">
					<p id="copyright">© 2013 - Todos os Direitos Reservados à Ordenex</p>
				</div>
			</div>
		</footer>
		
	<?php echo $this->Html->script('jquery.ba-cond.min'); ?>
	<?php echo $this->Html->script('jquery.slitslider'); ?>
	<script type="text/javascript"> 
			$(function() {
			
				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ),
						$nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {
							initEvents();
						},

						initEvents = function() {

							// add navigation events
							$navArrows.children( ':last' ).on( 'click', function() {

								slitslider.next();
								return false;

							} );

							$navArrows.children( ':first' ).on( 'click', function() {
								
								slitslider.previous();
								return false;

							} );

							$nav.each( function( i ) {
								$( this ).on( 'click', function( event ) {
										var $dot = $( this );
									
									if( !slitslider.isActive() ) {
										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									}
									
									slitslider.jump( i + 1 );
									return false;
								} );
							} );
						};

						return { init : init };

				})();

				Page.init();

				/**
				 * Notes: 
				 * 
				 * example how to add items:
				 */

				/*
				
				var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
				
				// call the plugin's add method
				ss.add($items);

				*/
			
			});
	</script>
	
	
	<script type="text/javascript">
	
		$('#bot_orc').click(function(){
			$('#form_float').fadeIn("fast");
			$('#float').fadeIn("slow");
		});

		$('#form_float').click(function(){
			$('#form_float').fadeOut("slow");
			$('#float').fadeOut("slow");
		});

		$('#close').click(function(){
			$('#form_float').fadeOut("slow");
			$('#float').fadeOut("slow");
		});



		$("input[name='tipo']").change(function(){

			var teste = $(this).val();
			
			if( teste == 'produtos')
			{
				
				$('#hidden_celula').html('<label class="radio  hidden_label"><input type="radio" value="usados" name="tipo" class="radio_change" id="radio_disable1"> Usados</label><label class="radio  hidden_label"><input type="radio" value="novos" name="tipo" class="radio_change" id="radio_disable2"> Novos</label><label class="radio"><span> - Em breve</span></label><div class="clear"></div>');
					document.getElementById("radio_disable1").disabled=true;
					document.getElementById("radio_disable2").disabled=true;

				$('#hidden_campo').html('<label for="">Valor médio investido no produto:</label><input type="text" name="valor-inves" value="Ex.: R$ 999,99">');


			}
			else
			{

				$('#hidden_celula').html('<label class="radio  hidden_label expres"><input type="radio" value="serv-exp" name="tipo" class="radio_change" id="radio_disable1"> Serviços Expressos</label><label class="radio"><span> - Em breve</span></label><div class="clear"></div>');
					document.getElementById("radio_disable1").disabled=true;

				$('#hidden_campo').html('<label for="">CEP do local do atendimento:</label><input type="text" name="cep" value="Ex.: 11721-100">'	);



			}

		});

		



	</script>
	




	<?php echo $this->element('footer'); ?>
	<?php echo $this->fetch('script'); ?>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>

