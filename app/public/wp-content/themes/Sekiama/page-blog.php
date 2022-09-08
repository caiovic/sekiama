<?php
// Template Name: Blog
?>
<?php
get_header(); ?>




<section>

	<?php global $wp_query; ?>
	<?php get_template_part('template-parts/hero'); ?>

	<ul class="container py-5 no-list">
		<?php
		global $post;
		rewind_posts();
		$post_per_page = 20;
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$query = new WP_Query(array(
			'posts_per_page' =>  $post_per_page,
			'paged' => $paged,


		));
		
		if ($query->have_posts()) :

			while ($query->have_posts()) : $query->the_post(); ?>
		
			<li class="pt-5">
				<div class="row">
					<figure class="col-md-5">
						<?php the_post_thumbnail('large', ['alt' => esc_html(get_the_title())]); ?>
					</figure>
					<div class="col-md-7">


						<?php the_title('<h2 class="font-gotham text-bold h4 text-uppercase">', '</h2>'); ?>
                        <?php get_template_part('template-parts/info-post'); ?>

						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<svg style="vertical-align: text-bottom;" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M10 0C8.02219 0 6.08879 0.58649 4.4443 1.6853C2.79981 2.78412 1.51809 4.3459 0.761209 6.17317C0.00433284 8.00043 -0.193701 10.0111 0.192152 11.9509C0.578004 13.8907 1.53041 15.6725 2.92894 17.0711C4.32746 18.4696 6.10929 19.422 8.0491 19.8079C9.98891 20.1937 11.9996 19.9957 13.8268 19.2388C15.6541 18.4819 17.2159 17.2002 18.3147 15.5557C19.4135 13.9112 20 11.9778 20 10C20 8.68678 19.7413 7.38642 19.2388 6.17317C18.7363 4.95991 17.9997 3.85752 17.0711 2.92893C16.1425 2.00035 15.0401 1.26375 13.8268 0.761205C12.6136 0.258658 11.3132 0 10 0ZM10 18C8.41775 18 6.87104 17.5308 5.55544 16.6518C4.23985 15.7727 3.21447 14.5233 2.60897 13.0615C2.00347 11.5997 1.84504 9.99113 2.15372 8.43928C2.4624 6.88743 3.22433 5.46197 4.34315 4.34315C5.46197 3.22433 6.88743 2.4624 8.43928 2.15372C9.99113 1.84504 11.5997 2.00346 13.0615 2.60896C14.5233 3.21447 15.7727 4.23984 16.6518 5.55544C17.5308 6.87103 18 8.41775 18 10C18 12.1217 17.1572 14.1566 15.6569 15.6569C14.1566 17.1571 12.1217 18 10 18ZM14 9H11V6C11 5.73478 10.8946 5.48043 10.7071 5.29289C10.5196 5.10536 10.2652 5 10 5C9.73479 5 9.48043 5.10536 9.2929 5.29289C9.10536 5.48043 9 5.73478 9 6V9H6C5.73479 9 5.48043 9.10536 5.2929 9.29289C5.10536 9.48043 5 9.73478 5 10C5 10.2652 5.10536 10.5196 5.2929 10.7071C5.48043 10.8946 5.73479 11 6 11H9V14C9 14.2652 9.10536 14.5196 9.2929 14.7071C9.48043 14.8946 9.73479 15 10 15C10.2652 15 10.5196 14.8946 10.7071 14.7071C10.8946 14.5196 11 14.2652 11 14V11H14C14.2652 11 14.5196 10.8946 14.7071 10.7071C14.8946 10.5196 15 10.2652 15 10C15 9.73478 14.8946 9.48043 14.7071 9.29289C14.5196 9.10536 14.2652 9 14 9Z" fill="#B41E1E" />
							</svg>

							<b class="text-black"> VER MAIS</b>
						</a>
					</div>
				</div>

			</li>


		<?php
		endwhile; ?>
		<style>
                        .pagination {
                            margin-top: 50px;
                            display: flex;
                            justify-content: center;
							font-weight: 700;
                        }

                        .pagination .page-numbers.current {
                            background-color: #045C38;
                    
                            border-radius: 50%;
                            text-align: center;
                            color: white;
                            width: 32px;
height:32px;
                            display: inline-block;

                        }

                        .pagination .page-numbers {
							padding-top: 5px
;
                            margin-left: 8px;
                            margin-right: 8px;
                        }
                    </style>
                    <div class="pagination">
                        <?php
                        echo paginate_links(array(
                            'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                            'total'        => $query->max_num_pages,
                            'current'      => max(1, get_query_var('paged')),
                            'format'       => '?paged=%#%',
                            'show_all'     => false,
                            'type'         => 'plain',
                            'end_size'     => 2,
                            'mid_size'     => 1,
                            'prev_next'    => true,
                            'prev_text'    => sprintf('<i></i> %1$s', __('<', 'text-domain')),
                            'next_text'    => sprintf('%1$s <i></i>', __('>', 'text-domain')),
                            'add_args'     => false,
                            'add_fragment' => '',
                        ));
                        ?>
                    </div>
					<?php else : echo '0 resultados';
                endif; // end of the loop. 
                ?>
	</ul>

</section>


<?php get_footer(); ?>