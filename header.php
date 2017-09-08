<!DOCTYPE html>
<html lang="en" style="<?php if(is_admin_bar_showing()) {?> margin-top:32px !important; <?php } else{ ?> margin-top:0px !important; <?php }  ?>">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title><?php bloginfo('name'); ?></title>

      <!-- bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <!-- fontawesome -->
      <script src="https://use.fontawesome.com/5964f513fc.js"></script>
     <?php
		/**
		 * get the wordpress header
		 */
		wp_head();
	?>
</head>
<body <?php body_class(); ?>>

	<main id="wrapper">
		
		<!-- 
			Header component 
		-->
		<div class="container-fluid sf-header" id="header">
			<div class="col-md-3 col-lg-3 sf-header__logo pull-left">
				<a href="/"><img src="http://svillingfoto.dev/wp-content/uploads/2017/08/17457429_758663554301755_8530212342656230702_n.jpg" height="65" width="65" alt=""></a>
			</div>
			<div class="col-xs-6 col-md-3 col-md-offset-6 col-lg-3 col-lg-offset-6 hidden-xs hidden-sm sf-header__nav">
				<?php 
				
					add_menu();

				 ?>
			 
			</div>

			<div class="sf-mobile-nav hidden-md hidden-lg pull-right">
				<span class="glyphicon glyphicon-menu-hamburger mobile-menu-btn"></span>
			</div>
		</div>

		<div class="mobile-menu hidden-md hidden-lg">
			<?php add_menu(); ?>
		</div>