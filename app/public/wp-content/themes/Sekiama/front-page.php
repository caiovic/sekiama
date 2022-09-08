<?php
   // Template Name: Home
   
   $is_mobile = wp_is_mobile();
   
   get_header(); ?>
<article>
  <?php echo do_shortcode('[rev_slider alias="slider-1"][/rev_slider]') ?>
  <section class="padding-small">
    <div class="container">
      <span class="detail-logo"></span>
      <h2 class="text-center">NOSSAS FAROFAS POSSUEM DIVERSOS BENEFÍCIOS
      </h2>
      <ul class="row justify-content-center no-list">
        <li class="col">
          <div class="text-center  padding-15">
            <figure class="zoomin">
              <img class="img-center mt-10" src="<?php echo get_stylesheet_directory_uri(); ?>/img/sem-gluten.png"
                title="Sekiama Farofas" alt="Sekiama Farofas">
            </figure>
            <p>Sem glúten</p>
          </div>
        </li>
        <li class="col">
          <div class="text-center padding-15">
            <figure class="zoomin">
              <img class="img-center mt-10 mb-3"
                src="<?php echo get_stylesheet_directory_uri(); ?>/img/Ingredientes-Selecionados.png"
                title="Sekiama Farofas" alt="Sekiama Farofas">
            </figure>
            <p>Ingredientes selecionados</p>
          </div>
        </li>
        <li class="col">
          <div class="text-center padding-15">
            <figure class="zoomin">
              <img class="img-center mt-10" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Sem-transgenicos.png"
                title="Sekiama Farofas" alt="Sekiama Farofas">
            </figure>
            <p>Sem transgênicos</p>
          </div>
        </li>
        <li class="col">
          <div class="text-center padding-15">
            <figure class="zoomin">
              <img class="img-center mt-10" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Sem-margarina.png"
                title="Sekiama Farofas" alt="Sekiama Farofas">
            </figure>
            <p>Sem adição de margarina</p>
          </div>
        </li>
        <li class="col">
          <div class="text-center  padding-15">
            <figure class="zoomin">
              <img class="img-center mt-10" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Sem-conservantes.png"
                title="Sekiama Farofas" alt="Sekiama Farofas">
            </figure>
            <p>Sem conservantes</p>
          </div>
        </li>
      </ul>
    </div>
  </section>


  <section>
    <div class="container text-center">
      <span class="detail-logo"></span>
      <h2 class="text-center">SEKIAMA FAROFAS</h2>
      <p>Para voce que ama farofa, temos a farofa perfeita</p>
      <ul class="slider-arrows-3 no-list mt-5">
        <?php
               $args = array(
               	'posts_per_page' => -1,
               	'product_cat' => 'farofas',
               	'post_type' => 'product',
               	'orderby' => 'date',
               );
               
               $the_query = new WP_Query($args);
               while ($the_query->have_posts()) {
               	$the_query->the_post();
               	wc_get_template_part('content', 'product');
               }
               wp_reset_postdata();
               ?>
      </ul>
    </div>
  </section>


  <section class="padding-small">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-12">
          <span class="detail-logo"></span>
          <h2 class="text-center">SEKIAMA KITS</h2>
          <p>Para você que ama vários sabores, temos kits com vantagens</p>
          <ul class="slider-arrows-3 no-list mt-5">
            <?php
                     $args = array(
                     	'posts_per_page' => -1,
                     	'product_cat' => 'kits',
                     	'post_type' => 'product',
                     	'orderby' => 'date',
                     );
                     
                     $the_query = new WP_Query($args);
                     while ($the_query->have_posts()) {
                     	$the_query->the_post();
                     	get_template_part('woocommerce/content-productkits');
                     
                     }
                     wp_reset_postdata();
                     ?>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <section class="home-banners padding-small mb-4">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-6 banner-btn mb-3">
          <a href="<?php the_field('link_banner_left'); ?>">
            <figure>
              <?php 
                  $image = get_field('banner_left');
                  if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php endif; ?>
            </figure>
          </a>
        </div>
        <div class="col-md-6 banner-btn mb-3">
          <a href="<?php the_field('link_banner_right'); ?>">
            <figure>
              <?php 
                        $image = get_field('banner_right');
                        if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php endif; ?>
            </figure>
          </a>
        </div>
      </div>
    </div>
  </section>


  <?php get_template_part('template-parts/depo'); ?>


  <section class="padding-small">
    <div class="container text-center">
      <div class="row align-items-center">
        <div class="col-md-5">
          <figure class="zoomin">
            <img class="img-center" src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/12/Prancheta-1.png"
              title="Sekiama Farofas" alt="Sekiama Farofas">
          </figure>
        </div>
        <div class="col-md-7 text-center">
          <span class="detail-logo"></span>
          <h2 class="text-center">Ingredientes cuidadosamente selecionados </h2>
          <p>Uma das principais razões para o sucesso das farofas Sekiama está na etapa de validação de nossos
            fornecedores e na escolha de cada um dos ingredientes.</p>
          <p>Além de um rigoroso processo de avaliação e seleção de fornecedores externos, que devem atender a critérios
            elevados de qualidade e segurança, a Sekiama controla cada um dos pontos do processo interno de fabricação,
            para que os produtos estejam sempre dentro do alto padrão que você merece!</p>
        </div>
      </div>
    </div>
  </section>


  <section class="home-banners">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-6">
          <a class="home_sekiama_clube">
            <figure>
              <?php 
                $image2 = get_field('banner_top_left');
                if( !empty( $image2 ) ): ?>
              <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>"
                class="img-left" />
              <?php endif; ?>
            </figure>
          </a>
          <a href="<?php the_field('link_banner_bottom_left'); ?>">
            <figure class="mt-3" style="margin-top:10px">
              <?php 
                        $image3 = get_field('banner_bottom_left');
                        if( !empty( $image3 ) ): ?>
              <img src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>" />
              <?php endif; ?>
            </figure>
          </a>
        </div>
        <a href="<?php the_field('link_banner_right2'); ?>" class="col-md-6 mt-3 mt-md-0">
          <figure>
            <?php 
                     $image4 = get_field('banner_right2');
                     if( !empty( $image4 ) ): ?>
            <img src="<?php echo esc_url($image4['url']); ?>" alt="<?php echo esc_attr($image4['alt']); ?>"
              class="img-right" />
            <?php endif; ?>
          </figure>
        </a>
      </div>
    </div>
  </section>


  <section class="padding-small">
    <div class="container text-center">
      <span class="detail-logo"></span>
      <h2 class="text-center">Acompanhe a sekiama em tempo real</h2>
      <p>Nosso Instagram está cheio de novidades para você
        acompanhar a Sekiama diariamente
      </p>
      <?php echo do_shortcode('[instagram-feed]');?>
    </div>
  </section>


  <section class="faq padding-small text-center">
    <div class="container">
      <span class="detail-logo"></span>
      <h2>Perguntas frequentes</h2>
      <ul class="row justify-content-center no-list">
        <?php
               $args = array(
               	'posts_per_page' => 5,               	
               	'post_type' => 'faq',
               	'order' => 'ASC',
               
               );
               $query = new WP_Query($args);
               
               if ($query->have_posts()) :
               
               	while ($query->have_posts()) : $query->the_post(); ?>
        <li class="col-md-12">
          <div class="text-center mt-10 padding-15">
            <figure><?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?></figure>
            <h3 class="font-gotham text-bold h4"><?php the_title(); ?></h3>
            <p> <?php the_content(); ?>
            </p>
          </div>
        </li>
        <?php endwhile; // end of the loop. 
               else : echo '0 resultados';
               endif; // end of the loop. 
               ?>

        <a href="/faq" title="Ver tabela de preços" class="btn-border-secondary btn-center">TIRAR MAIS DÚVIDAS</a>
      </ul>
    </div>
  </section>


  <section class=" padding-small text-center">
    <div class="container">
      <span class="detail-logo"></span>
      <h2>onde nos encontrar?</h2>
      <ul class="slider-arrows-3 no-list">
        <?php
               $args = array(
               	'posts_per_page' => -1,
               	'post_type' => 'parceiros',
               	'orderby' => 'name',
               	'order' => 'ASC',
               
               );
               $query = new WP_Query($args);
               
               if ($query->have_posts()) :
               
               	while ($query->have_posts()) : $query->the_post(); ?>
        <li>
          <div class="text-center mt-20 padding-15">
            <figure><?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'img-center')); ?></figure>
          </div>
        </li>
        <?php endwhile; // end of the loop. 
               else : echo '0 resultados';
               endif; // end of the loop. 
               ?>

      </ul>
    </div>
  </section>





  <div class="container text-center padding-small">
    <div class="row justify-content-center align-items-center">
      <p class="col-md-3 h3 title_h3">farofas de <br>verdade</p>
      <img class="col-md-1 d-none d-md-block" src="<?php echo get_stylesheet_directory_uri(); ?>/img/heart.png">
      <p class="col-md-3 h3 title_h3">naturalmente <br>saborosas</p>
      <img class="col-md-1 d-none d-md-block" src="<?php echo get_stylesheet_directory_uri(); ?>/img/heart.png">
      <p class="col-md-3 h3 title_h3">artesanalmente honestas</p>
    </div>
  </div>

</article>
<?php get_footer(); ?>