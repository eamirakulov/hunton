<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">

	<title><?php bloginfo('name'); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/slick/slick.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/additional.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<script src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/smooth-scroll.min.js"></script>

	<!-- Compiled and minified JavaScript -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	<script type="text/javascript">
		$(function() {
			$('select').material_select();
		});
		var scroll = new SmoothScroll('a.smooth');

		window.onhashchange = function() {
			$('.button-collapse').sideNav('hide');
			$('.main-menu a.active').removeClass('active');
			var hash = window.location.hash;
			$( ".main-menu a[href='"+hash+"']" ).addClass('active');
		}
		$(window).scroll(function() {    
		    var scroll = $(window).scrollTop();
		    if (scroll >= 660) {
		        $("header").addClass("shadow");
		    }
		    else {
		        $("header").removeClass("shadow");
		    }
		});
	</script>
	<?php wp_head(); ?>

</head>
	<body class="<?php echo the_slug(); ?>">
		<!--[if lt IE 8]><p>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p><![endif]-->

		<ul id="slide-out" class="side-nav">
			<li><a class="smooth" href="<?php bloginfo('url'); ?>#why">our story</a></li>
			<li><a class="smooth" href="<?php bloginfo('url'); ?>#services">our services</a></li>
			<li><a class="smooth" href="<?php bloginfo('url'); ?>#safety">safety</a></li>
			<li><a class="smooth" href="<?php bloginfo('url'); ?>#whats">WHAT'S HAPPENING</a></li>
			<li><a href="<?php bloginfo('url'); ?>/rentals">RENTALS</a></li>
			<li><a class="smooth" href="<?php bloginfo('url'); ?>#faq">FAQ</a></li>
			<!--li><a class="smooth" href="<?php bloginfo('url'); ?>#careers">CAREERS</a></li-->
		</ul>
		<header>
			<div class="container">
				<div class="row header">
					<div class="col s12 m12 l2">
						<a class="logo" href="<?php echo get_site_url()?>"><img alt="Logo" src="<?php bloginfo('template_url'); ?>/img/logo-v2.png" /></a>
					</div>
					<div class="col s6 m12 l8">
						<div class="main-menu">
							<ul>
								<li><a class="smooth" href="<?php bloginfo('url'); ?>/why-hunton">our story</a>
									<ul>
										<li><a href="<?php bloginfo('url'); ?>/our-history">Our History</a></li>
										<li><a href="<?php bloginfo('url'); ?>/our-team/">Our Team</a></li>
										<li><a href="<?php bloginfo('url'); ?>/why-hunton/#partners">Our Partners</a></li>
										<li><a href="<?php bloginfo('url'); ?>/safety/">Safety</a></li>
										<li><a href="<?php bloginfo('url'); ?>/why-hunton/#case_studies">Case Studies</a></li>
										<li><a href="<?php bloginfo('url'); ?>/why-hunton/#testimonials">Testimonials</a></li>
										<li><a href="<?php bloginfo('url'); ?>/why-hunton/#training">Training</a></li>
									</ul>
								</li>
								<li><a class="smooth" href="<?php bloginfo('url'); ?>#services">our services</a>
									<ul>
										<li><a href="<?php bloginfo('url'); ?>/indoor-environmental-solutions/">Indoor Environmental Solutions</a></li>
										<li><a href="<?php bloginfo('url'); ?>/mechanical-services/">Mechanical Services</a></li>
										<li><a href="<?php bloginfo('url'); ?>/building-automation/">Building Automation Services</a></li>
										<li><a href="<?php bloginfo('url'); ?>/energy-services/">Energy Services</a></li>
										<li><a href="<?php bloginfo('url'); ?>/industrial-services/">Industrial Services</a></li>
										<li><a href="<?php bloginfo('url'); ?>/rentals/">Rental Services</a></li>
										<li><a href="<?php bloginfo('url'); ?>/markets-served/">Markets Served</a></li>
										<li><a href="<?php bloginfo('url'); ?>/engineered-fabricated-products/">Engineered & Fabricated Products</a></li>
										<li><a href="<?php bloginfo('url'); ?>/emergency-services/">Emergency Services</a></li>
										<li><a href="<?php bloginfo('url'); ?>#">Special Projects</a></li>
									</ul>
								</li>
								<li><a class="smooth" href="<?php bloginfo('url'); ?>/safety">safety</a></li>
								<li><a class="smooth" href="<?php bloginfo('url'); ?>/whats-happening">WHAT'S HAPPENING</a></li>
								<li><a href="<?php bloginfo('url'); ?>/rentals">RENTALS</a></li>
								<li><a class="smooth" href="<?php bloginfo('url'); ?>/faqs">FAQ</a></li>
								<li><a class="smooth" href="<?php bloginfo('url'); ?>/careers">CAREERS</a></li>
							</ul>
						</div>
					</div>
					<div class="col s12 m12 l2 contact">
						<a href="tel:7136438336"><img src="<?php bloginfo('template_url'); ?>/img/phone.svg"></a>
						<a href="<?php bloginfo('url'); ?>/contact-us/" class="btn-green">contact us</a>
					</div>
					<div class="toggle-mobile">
  						<a href="#" data-activates="slide-out" class="button-collapse"><span></span><span></span><span></span></a>
					</div>
				</div>
			</div>
		</header>

		<div class="content">
			<div class="social">
				<img src="<?php bloginfo('template_url'); ?>/img/social.png">
				<a href="https://www.facebook.com/huntonservices/" class="fb"></a>
				<a href="https://twitter.com/HuntonServices" class="tw"></a>
				<a href="https://www.linkedin.com/company/hunton-services/" class="ln"></a>
			</div>