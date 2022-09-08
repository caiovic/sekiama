<?php
// Template Name: Contato
get_header(); ?>

<style>
	.wpcf7-submit {
		margin-left: auto;
		display: block;
	}
</style>
<article>
	<?php get_template_part('template-parts/hero'); ?>
	<div class="container padding-small">
		<span class="detail-logo"></span>
		<h2 class=" text-center">entre em contato conosco</h2>
		<div class="row justify-content-center">
			<div class="col-md-9">
				<?php echo do_shortcode('[contact-form-7 id="69" title="Contato"]') ?>

			</div>
		</div>

	</div>


</article>


<?php get_footer(); ?>