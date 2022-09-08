<?php
// Template Name: Planos
?>

<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<style>
			.logo-operadora img {
				height: 50px;
				width: 100%;
				object-fit: contain;
			}

			.text-custom {
				color: <?php if (get_field('cor')) {
							the_field('cor');
						} else {
							echo '#0B66D8';
						}; ?>
			}

			.btn-secondary {
				background-color: <?php if (get_field('cor')) {
										the_field('cor');
									} else {
										echo '#0B66D8';
									}; ?>
			}
		</style>
		<section class="banner padding-medium">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6">
						<h1><?php the_title(); ?></h1>

						<?php the_content(); ?>
						<div class="mt-4 mb-5">
							<?php get_template_part('template-parts/whatsapp'); ?>
						</div>
					</div>
					<div class="col-md-6 position-relative">
						<svg class="position-absolute zoomin" style="   opacity:0.75; height: 127%;    z-index: -1;    width: 115%;    top: -13%;    right: -5%;" width="631" height="694" viewBox="0 0 631 694" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M211.915 244.432C210.601 379.466 118.261 380.815 86.0347 491.709C43.7176 725.066 387.59 715.176 484.316 650.748C573.045 591.647 662.566 451.144 610.169 227.815C557.771 4.48581 331.322 -19.1966 246.999 18.5248C162.676 56.2462 212.353 199.447 211.915 244.432Z" fill="<?php if (get_field('cor')) {
																																																																													the_field('cor');
																																																																												} else {
																																																																													echo '#0B66D8';
																																																																												}; ?>" />
							<path d="M52.4887 381.087C51.1012 441.162 81.4867 443.942 96.8529 437.823C101.264 425.922 117.142 395.722 145.365 370.126C180.644 338.13 193.908 307.908 191.705 298.056C189.501 288.204 194.149 254.197 145.243 250.649C96.3375 247.101 54.223 305.992 52.4887 381.087Z" fill="<?php if (get_field('cor')) {
																																																																												the_field('cor');
																																																																											} else {
																																																																												echo '#0B66D8';
																																																																											}; ?>" />
						</svg>
						<div class="plan-dest card  shadow-small p-4 col-md-9 m-auto">
							<?php $image = get_field('logotipo'); ?>
							<div class="tag"><span style="color:<?php if (get_field('cor')) {
																	the_field('cor');
																} else {
																	echo '#0B66D8';
																}; ?>"> Mais Vendido</span></div>
							<h3 class="text-center text-bold"><?php the_field('titulo'); ?></h3>
							<img class="img-center" src="<?php echo $image['url']; ?>" title="Plano <?php echo $image['title']; ?>" alt="Logotipo <?php echo $image['title']; ?>" />
							<p>
								<?php the_field('descricao'); ?>
							</p>
							<div class="d-flex flex-wrap justify-content-between align-items-center ">
								<span class="text-custom  mt-4">
									<small>a partir de</small><br>
									<span class="h2"><?php the_field('preco'); ?></span>

								</span>
								<a href="<?php the_field('link'); ?>" title="Contratar Plano" class="btn-secondary mt-4">Contratar Plano</a>
							</div>
						</div>
					</div>

				</div>


			</div>
		</section>

		<section class="bg-light padding-medium">
			<div class="container">
				<h2 class="text-center mb-4 col-md-10 mx-auto">Melhores operadoras em Santos e Baixada Santista para quem quer contratar um <strong><?php the_title(); ?></strong></h2>
				<div class="row">
					<?php
					global $post;
					$page_slug = $post->post_name;
					query_posts(
						array(
							'post_type' => 'operadoras',
							'category_name' => $page_slug,
						)
					);
					if (have_posts()) {
						while (have_posts()) {
							the_post(); ?>
							<div class="col-md-4">


								<div class="card p-4 text-center mt-3">
									<figure class="logo-operadora my-4"><?php the_post_thumbnail(); ?></figure>

									<?php the_title("<h3 class='h4'>", "</h3>"); ?>
									<?php the_excerpt(); ?>
									<span>
										<a href="<?php the_permalink() ?>" title="Saiba mais sobre <?php the_title(); ?>" class="mx-auto mt-3 btn-border-secondary">Saiba Mais</a>
									</span>
								</div>
							</div>
					<?php
						}
					}
					wp_reset_query();

					?>
				</div>
			</div>
		</section>

<?php endwhile;
endif; ?>

<?php get_template_part('template-parts/call'); ?>
<?php get_template_part('template-parts/covid'); ?>

<?php get_footer(); ?>