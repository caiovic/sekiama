<?php
   // Template Name: Sobre
   
   get_header(); ?>
<article>
  <?php get_template_part('template-parts/hero'); ?>

  <!--inicio da timeline-->
  <?php get_template_part('template-parts/timeline'); ?>
  <!-- fim da timeline-->



  <section class="padding-small">
    <div class="container">
      <span class="detail-logo"></span>
      <h2 class="text-center">
        temos história para contar
      </h2>
      <ul class="row justify-content-center no-list about-numbers">
        <li class="col-md-2">
          <div class="text-center mt-20">
            <p><span>06</span><br>Anos de <br>mercado</p>
          </div>
        </li>
        <li class="col-md-2">
          <div class="text-center mt-20">
            <img class="img-center" src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/12/brasil-1.png"
              title="sekiama" alt="sekiama " style="max-width:50px;margin-bottom:12px">
            <p>Presentes em <br>todo o Brasil</p>
          </div>
        </li>
        <li class="col-md-2">
          <div class="text-center mt-20">
            <p><span>+9.970</span><br>Clientes</p>
          </div>
        </li>
      </ul>
    </div>
  </section>


  <?php get_template_part('template-parts/depo'); ?>


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


  <div class="container padding-small loja-img">
    <a href="/loja">
      <figure>
        <img class="img-center" src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/11/Banner-Loja.png"
          title="bannerloja" alt="sekiama ">
      </figure>
    </a>
  </div>
</article>
<?php get_footer(); ?>