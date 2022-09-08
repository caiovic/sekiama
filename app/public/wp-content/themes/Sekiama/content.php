<ul class="post-content">
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<li>
		<a class="post-content__card" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<figure>
				<?php the_post_thumbnail( 'large', [ 'alt' => esc_html ( get_the_title() ) ] ); ?>
			</figure>
			<div class="post-content__card-text">
				<?php the_title('<h2>','</h2>'); ?>
				<?php the_excerpt(); ?>
			</div>


		</a>

	</li>
	<?php endwhile; ?>
	<?php endif; ?>
	<?php wp_reset_query(); ?>
</ul>