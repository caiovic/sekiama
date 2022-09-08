<?php
/**
 * The template for displaying search results pages.
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			
			<section class="hero text-center text-white padding-small">
				<div class="container">
					<h1 class="page-title">
								<?php
									/* translators: %s: search term */
									printf( esc_attr__( 'Search Results for: %s', 'storefront' ), '<span>' . get_search_query() . '</span>' );
								?>
							</h1>
				</div>
			</section>
				<div class="container padding-small">
										<ul class="row no-list">


			<?php
			while ( have_posts() ) :
				the_post();
			
				/**
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 * 				get_template_part( 'content', get_post_format() );

				 */
											echo '<div class="col-md-4 mb-5 text-center">';
										wc_get_template_part('content', 'product');
										echo '</div>';


			
			endwhile;

		else :

?>
					</ul>
						</div>
			<section class="hero text-center text-white padding-small">
				<div class="container">
					<h1 class="page-title">
							Não há resultados para a sua busca
							</h1>
				</div>
			</section>
			<?php
		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
