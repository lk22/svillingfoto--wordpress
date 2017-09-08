<script>
	
	/**
	 * Smooth Scroll
	 */
		$(function() {
		  	$('a[href*="#"]:not([href="#"])').click(function() {
		   		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
		   		    && location.hostname == this.hostname) {
		      		var target = $(this.hash);
		      		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      	if (target.length) {
			        	$('html,body').animate({
			          		scrollTop: target.offset().top
			        	}, 1000);
			        	return false;
			      	}
		    	}
		  	});
		});

	/**
	 * mobile menu
	 */
	$(function() {
		$('.mobile-menu-btn').click(function() {
			if($('.mobile-menu-btn').hasClass('glyphicon-menu-hamburger')) {
				$('.mobile-menu-btn').delay(500).removeClass('glyphicon-menu-hamburger').addClass('glyphicon-remove');
			} else {
				$('.mobile-menu-btn').delay(500).removeClass('glyphicon-remove').addClass('glyphicon-menu-hamburger');
			}
			
			$('.mobile-menu').delay(100).fadeToggle(100);
		})

	})

</script>