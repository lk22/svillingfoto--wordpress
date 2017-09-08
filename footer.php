		<?php wp_footer(); ?>	

		<footer class="container-fluid <?php 
			if(page_title() === 'home') {
				 echo 'trans-footer'; 
			} else {
			 	echo 'footer';
			} ?>">

			<div class="overlay">
				<h6 class="text-center company">
					SvillingFoto ApS - Email: svillingfoto@gmail.com - 
					<a class="facebook-link" href="https://www.facebook.com/SvillingFoto/?pnref=lhc"><i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</a> -
					<a class="instagram-link" href="https://www.instagram.com/svillingfoto"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a> 
				</h6>
			</div>

		</footer>

	</main>

	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.9.0/js/lightbox.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>

    <?php 
		require('script.php');
     ?>
	
</body>
</html>