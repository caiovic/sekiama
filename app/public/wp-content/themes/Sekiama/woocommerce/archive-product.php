<?php
   /**
    * The Template for displaying product archives, including the main shop page which is a post type archive
    *
    * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
    *
    * HOWEVER, on occasion WooCommerce will need to update template files and you
    * (the theme developer) will need to copy the new files to your theme to
    * maintain compatibility. We try to do this as little as possible, but it does
    * happen. When this occurs the version of the template file will be bumped and
    * the readme will list any important changes.
    *
    * @see https://docs.woocommerce.com/document/template-structure/
    * @package WooCommerce\Templates
    * @version 3.4.0
    */
   
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

   
   
   
   ?>
<?php
   $is_mobile = wp_is_mobile();
   
   get_header(); ?>
<style>
   .product .woocommerce-LoopProduct-link img {
   margin: 0 auto;
   height: 300px;
   width: 100%;
   -o-object-fit: contain;
   object-fit: contain;
   width: 300px;
   }
   .product .add_to_cart_button{
   display:block;
   /* 	margin-left:1rem !Important; */
   }
	.woocommerce .woocommerce-result-count{
		display:none
	}
</style>
<article>
   <section class="padding-small shop-page" >
      <div class="container">
         <header class="woocommerce-products-header ">
            <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
            <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
            <?php endif; ?>
            <?php
               /**
                * Hook: woocommerce_archive_description.
                *
                * @hooked woocommerce_taxonomy_archive_description - 10
                * @hooked woocommerce_product_archive_description - 10
                */
               // 	do_action( 'woocommerce_archive_description' );
               ?>
         </header>
		  <hr>
		  <div class="row">
			  
		  
         <nav class="filter-nav col-md-2 d-flex flex-column mb-4">
         <p>Categorias:  
         </p>
         <a href="/loja" class="my-2">
         Mostrar tudo
         </a>
         <?php
            $catsArray = array(
                64,
                63,
                227,
                65,
                66,
                211,
                241
            );
            $terms     = get_terms(array(
                'taxonomy' => 'product_cat',
            //     'include' => $catsArray,
            //     'orderby' => 'include',
                'hide_empty' => true
                
            ));
            foreach ($terms as $term) { ?>
         <a href="<?php echo get_term_link($term->term_id, 'product_cat'); ?>" title="<?php $term->name;?>" class="my-2">
         <?php echo $term->name . '(' . $term->count . ')';?>    
         </a>
         <?php
            }?>
		  </nav>
         <ul class="col-md-10 d-flex flex-wrap no-list">
            <?php
               if ( woocommerce_product_loop() ) {
               
               	/**
               	 * Hook: woocommerce_before_shop_loop.
               	 *
               	 * @hooked woocommerce_output_all_notices - 10
               	 * @hooked woocommerce_result_count - 20
               	 * @hooked woocommerce_catalog_ordering - 30
               	 */
               	echo '<div class="d-flex flex-wrap justify-content-end align-items-center" style="width:100%">';
               	do_action( 'woocommerce_before_shop_loop' );
               	echo '</div>';
               
               	woocommerce_product_loop_start();
               
               	if ( wc_get_loop_prop( 'total' ) ) {
               		while ( have_posts() ) {
               			the_post();
               
               			/**
               			 * Hook: woocommerce_shop_loop.
               			 */
               			do_action( 'woocommerce_shop_loop' );
               
               			wc_get_template_part( 'content', 'product' );
               		}
               	}
               
               	woocommerce_product_loop_end();
               
               	/**
               	 * Hook: woocommerce_after_shop_loop.
               	 *
               	 * @hooked woocommerce_pagination - 10
               	 */
               	do_action( 'woocommerce_after_shop_loop' );
               } else {
               	/**
               	 * Hook: woocommerce_no_products_found.
               	 *
               	 * @hooked wc_no_products_found - 10
               	 */
               	do_action( 'woocommerce_no_products_found' );
               }
               
               ?>
         </ul>
			  </div>
      </div>
   </section>
</article>
<?php
get_footer( 'shop' );