<section class="hero text-center text-white padding-small">
	<div class="container">
		<h1><?php the_title();?></h1>
	<?php
		if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
		}
	?>
	</div>
	</section>