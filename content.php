<!-- content -->
<?php if(page_title() === 'Kontakt') {

	?> 

		<div class="container-fluid content <?php echo page_title(); ?>">
			<h1 class="<?php page_title(); ?>__title">
				<?php echo page_title(); ?>
			</h1>
			<hr>

			<div class="<?php echo page_title() ?>-wrapper">
				<?php the_content(); ?>
			</div>
		</div>

	<?php

} ?> 

<?php
 	if(page_title() === 'home') {
 		?>

			<div class="container-fluid content home">
				<h1 class="text-center headline">Minde skabende <br>Fotografier</h1>

				<h3 class="text-center tagline">Af dine Begivenheder</h3>

				<h5 class="text-center contact-me">Kunne du tænke dig en fotosession, kontakt mig <a href="#home_contact">her</a></h5>
			</div>

			<div class="container-fluid" id="gallery">
				<h2 class="text-center gallery__headline">Mit Arbejde</h2>
				<h4 class="text-center gallery__tagline">Se et udpluk af det arbejde jeg udfører</h4>

				<div class="container" id="gallery__wrapper">
					<?php 

						/**
						 * get the gallery field for the frontpage
						 * @var [type]
						 */
						$galleryImages = (get_field('frontpageimages')) ? get_field('frontpageimages') : '';

						foreach ($galleryImages as $image) {
							?>

								<div class="col-sm-6 col-md-4 col-lg-4 gallery-image__item">
									<img class="img img-circle center-block" src="<?php echo $image['url']; ?>" height="180" width="180" alt="<?php echo $image['alt']; ?>">

								</div>

							<?php
						}

					 ?>

				</div>
				<h5 class="text-center">Se flere <a href="/Gallery">billeder</a></h5>
			</div>

			<div class="container-fluid" id="home_contact">

				<h2 class="text-center">Book en fotosession ved at udfylde formularen nedenunder</h2>
				<h4 class="text-center">Eller skriv til <br> svillingfoto@gmail.com</h4>
				<h4 class="text-center">Eller på telefon: 42 21 84 44</h4>

				<div class="row home-contact__form-section">
					<?php echo do_shortcode('[contact-form-7 id="28" title="sf-kontakt formular"]'); ?>
				</div>
				
			</div>

 		<?php
 	} 

	/**
	 * if entering gallery page
	 */
 	if(page_title() === 'Gallery') {
		?>
			
			<!-- show content for gallery page -->
			<div class="container content gallery">

				<!-- gallery title -->
				<h1 class="gallery__title"><?php echo page_title(); ?></h1>
				<div class="gallery-nav">
					<?php add_menu(['theme_location' => 'galleries']) ?>
				</div>
				<hr>

				<!-- wrapper for all gallery pictures -->
				<div class="gallery-wrapper">
					<?php 

						/**
						 * get all images from the custom field
						 * @var [type]
						 */
						$images = get_field('images');

						// debug($images);

						/**
						 * if any images exists in the field
						 */
						if($images) {

							/**
							 * loop through them
							 */
							foreach ($images as $image) {
								?>

									<div class="col-sm-6 col-md-2 col-lg-2 gallery-wrapper__image">
										<a href="<?php echo $image['url']; ?>">
											<img class="img img-responsive img-circle" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>">
											<h3 class="text-center"><?php echo $image['caption']; ?></h3>
										</a>
									</div>

								<?php
							}
						}

					?>
				</div>
			</div>

		<?php
 	}

 	if(page_title() === 'Bryllup' ||
 		page_title() === 'Konfirmationer' ||
 		page_title() === 'Reklame' ||
 		page_title() === 'Portrætter') {

		?>

			<div class="container content <?php echo page_title(); ?>-gallery">
				
				<h1 class="gallery__title"><?php echo page_title(); ?></h1>
				<div class="gallery-nav">
					<?php add_menu(['theme_location' => 'galleries']) ?>
				</div>
				<hr>

				<div class="gallery-wrapper">
					<?php 
		
						$images = get_field('images');

						foreach($images as $image) {
							?>

								<div class="col-sm-6 col-md-2 col-lg-2 gallery-wrapper__image">
									<a href="<?php echo $image['url']; ?>">
										<img class="img img-responsive img-circle" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>">
									<h3 class="text-center caption"><?php echo $image['caption']; ?></h3>
									</a>
								</div>

							<?php
						}

					 ?>
				</div>

			</div>


		<?php 

 	}
?>
