<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>./img/to-do-list.ico" type="image/x-icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<!-- Css Animation -->
			<!-- Animate.css-->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
			<!-- Hover.css-->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover.css"/>
		<!--Css police-->
		 	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@800&display=swap" rel="stylesheet">
		<!--Css Maison-->
		<link rel="stylesheet" href="./html5blank-stable/style.css">
		
		<?php wp_head(); ?>
		

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- nav -->
					<nav class="nav" role="navigation" style="color: white;">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->

			<div class="container">

			<!--Section entete-->

			<div id="section-alert" class="container"></div>
			
			<div id="template-alert-ajax" class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
				<strong class="ajax-text" >Oups ! il semble qu'il y ai eu une erreur lors du chargement des donnés , veuillez rafraichir la page</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div id="template-alert-delete" class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
				<strong class="dlt-text" >Cette tâche à bien été supprimé
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
				<div class="heading">
					<h2>Liste de Tâches 
						<img src="<?php echo get_template_directory_uri(); ?>/img/App-lists-icon.png" alt="">
					</h2>
				</div>
			<!--Fin section entete-->