<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<!-- <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon"> -->
	<!-- <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed"> -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>
	<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
        	assets: '<?php echo get_template_directory_uri(); ?>',
        	tests: {}
        });
    </script>

</head>
<body <?php body_class(); ?>>
	<div class="wrapper" style="background: url(<?php the_field('background','option'); ?>) no-repeat #f2f2f2">
		<header class="" role="banner">
			<nav class="navbar navbar-default navbar-custom">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Top-Menu" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img  src="<?php header_image(); ?>"  alt="" alt="Logo" class="Brand--image logo-img"/>
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="Top-Menu">

						<?php 
						$facebook=get_field('facebook','option');
						$twitter=get_field('twitter','option');
						$instagram=get_field('instagram','option');
						if($facebook||$twitter||$instagram)
						{
							?>
							<ul class='nav navbar-nav navbar-right SocialNetworks'>
								<?php
								if($facebook){
									?>
									<li class="nav-item">
										<a href="<?=$facebook?>" class="nav-link" title="Facebook"><i class="socicon socicon-facebook"></i>
										</a>
									</li>
									<?php								
								}
								if($twitter){
									?>
									<li class="nav-item">
										<a href="<?=$twitter?>" class="nav-link" title="Twitter"><i class="socicon socicon-twitter"></i>
										</a>
									</li>
									<?php								
								}
								if($instagram){
									?>
									<li class="nav-item">
										<a href="<?=$instagram?>" class="nav-link" title="Instagram"><i class="socicon socicon-instagram"></i>
										</a>
									</li>
									<?php
								}?>
							</ul>
							<?php
						}
						?>
						<?php html5blank_nav(); ?>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->

			</nav>
		</header>
		<div class="backGroundColor">
		<div class="container backgroundWhite" >

