<?php 
		$image1 = wp_get_attachment_image_src( get_field('slider_1'), 'home-slider-size' );
	  $image2 = wp_get_attachment_image_src( get_field('slider_2'), 'home-slider-size' );
	  $image3 = wp_get_attachment_image_src( get_field('slider_3'), 'home-slider-size' );
	  $image4 = wp_get_attachment_image_src( get_field('slider_4'), 'home-slider-size' );
	  $image5 = wp_get_attachment_image_src( get_field('slider_5'), 'home-slider-size' );
?>

    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
     
    <!-- Default Theme -->
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
     
    <!-- Include js plugin -->
    <script src="assets/owl-carousel/owl.carousel.js"></script>
    
    <div id="owl-example" class="owl-carousel">
	    <div> Your Content </div>
	    <div> Your Content </div>
	    <div> Your Content </div>
	    <div> Your Content </div>
	    <div> Your Content </div>
    </div>
    
    <script type="text/javascript">
			$(document).ready(function() { 
				$("#owl-example").owlCarousel(); 
	    });
    </script>
