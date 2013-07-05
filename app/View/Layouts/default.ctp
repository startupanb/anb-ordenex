<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="pt-BR"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="pt-BR"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="pt-BR"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-BR"> <!--<![endif]-->
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


	
</head>

<body>
	
	<!--[if lt IE 7]>
		<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
	<![endif]-->
	

		<header>
			<div class="centralizer">
				<img src="logo.png" height="61" width="189" alt="">
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
			</div>
			<div class="clear"></div>
		</section>
		


		<footer>
			<h3>Footer</h3>
		</footer>
		

	
	<?php echo $this->element('footer'); ?>
	<?php echo $this->fetch('script'); ?>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>