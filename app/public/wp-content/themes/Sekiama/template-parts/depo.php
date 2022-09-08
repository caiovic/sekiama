<section class="testmonial padding-small">
		<div class="container">
			<h2>Sekiama lovers</h2>
			<p class="ch66 mb-4">Confira o feedback de quem adquiriu as delícias da Sekiama nas refeições
				do dia-a-dia</p>
			<div class="slider-arrows-2 ">

				<?php

				$args = array(
					'post_type' => 'depoimento',
					'orderby' => 'name',
					'order' => 'ASC',

				);
				$query = new WP_Query($args);

				if ($query->have_posts()) :

					while ($query->have_posts()) : $query->the_post(); ?>
<div>
						<div class="d-flex bg-white py-5 px-1 m-2 flex-wrap">
							<div class="col-md-3">
								<figure><?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?></figure>
							</div>
							<div class="col-md-9">

								<p>
									<?php the_content(); ?>
								</p>
								<small class="text-primary-color text-bold">
									<?php the_title(); ?>
								</small>
							</div>
						</div>

						</div>
				<?php endwhile; // end of the loop. 
										wp_reset_postdata();

				else : echo '0 resultados';
				endif; // end of the loop. 
				?>
			</div>
		</div>
	</section>