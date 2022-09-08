<?php
   // Template Name: Local
   get_header(); ?>
<style>
   .wpcf7-submit {
   margin-left: auto;
   display: block;
   }
</style>
<article>
   <?php get_template_part('template-parts/hero'); ?>
   <div class="container padding-small text-center">
      <span class="detail-logo"></span>
      <h2>ONDE NOS LOCALIZAR?</h2>
      <p class="ch66 mb-3">Quer garantir nossas farofas e não sabe onde encontrar? Não tem problema!
         Além do nosso site, possuímos pontos físicos na sua cidade. Clique no botão abaixo
         e localize a loja mais próxima para você comprar as nossas farofas
      </p>
      <a href="/" class="d-none btn-primary">
         Usar minha Iocalização atual
         <svg style="vertical-align: text-bottom;margin-left:10px" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.9998 2.54662C11.6737 1.28684 9.87514 0.579102 7.99978 0.579102C6.12442 0.579102 4.32586 1.28684 2.99978 2.54662C1.6737 3.80639 0.928711 5.51502 0.928711 7.29662C0.928711 9.07821 1.6737 10.7868 2.99978 12.0466L7.39145 16.2266C7.46892 16.3008 7.56108 16.3597 7.66263 16.3999C7.76418 16.4401 7.8731 16.4608 7.98311 16.4608C8.09312 16.4608 8.20204 16.4401 8.30359 16.3999C8.40514 16.3597 8.49731 16.3008 8.57478 16.2266L12.9998 12.007C14.3203 10.7525 15.0622 9.05099 15.0622 7.27682C15.0622 5.50266 14.3203 3.80115 12.9998 2.54662ZM11.8081 10.8749L7.99978 14.5087L4.19145 10.8749C3.43907 10.1595 2.92684 9.24827 2.71952 8.25635C2.51221 7.26442 2.6191 6.23637 3.0267 5.30215C3.4343 4.36794 4.12429 3.56949 5.00947 3.00774C5.89465 2.446 6.93527 2.14618 7.99978 2.14618C9.06429 2.14618 10.1049 2.446 10.9901 3.00774C11.8753 3.56949 12.5653 4.36794 12.9729 5.30215C13.3805 6.23637 13.4874 7.26442 13.28 8.25635C13.0727 9.24827 12.5605 10.1595 11.8081 10.8749ZM5.49978 4.8662C4.82704 5.50727 4.44927 6.37556 4.44927 7.28078C4.44927 8.186 4.82704 9.0543 5.49978 9.69537C5.99958 10.171 6.6361 10.4958 7.32949 10.6291C8.02287 10.7623 8.74224 10.6981 9.39734 10.4444C10.0524 10.1907 10.6141 9.75892 11.0118 9.20315C11.4096 8.64737 11.6257 7.99239 11.6331 7.32037C11.6369 6.87165 11.5459 6.42678 11.3655 6.01205C11.1852 5.59732 10.9191 5.22115 10.5831 4.90578C10.2528 4.58482 9.85901 4.32908 9.4243 4.15328C8.98958 3.97747 8.52256 3.88507 8.05011 3.88139C7.57766 3.87771 7.10911 3.96283 6.67142 4.13184C6.23373 4.30085 5.83555 4.55043 5.49978 4.8662ZM9.40811 8.5712C9.09232 8.87579 8.67496 9.06671 8.22739 9.11132C7.77982 9.15593 7.32983 9.05146 6.95437 8.81577C6.5789 8.58008 6.30128 8.22781 6.16895 7.81918C6.03663 7.41056 6.05782 6.97095 6.22891 6.57553C6.4 6.18011 6.71036 5.85342 7.10693 5.65132C7.5035 5.44923 7.96166 5.38427 8.40306 5.46756C8.84446 5.55085 9.2417 5.77722 9.52687 6.10795C9.81204 6.43869 9.96742 6.85326 9.96645 7.28078C9.95432 7.76945 9.73852 8.23357 9.36645 8.5712H9.40811Z" fill="white" />
         </svg>
      </a>
   </div>
   
   
   <div class="container inner_padding"><!--container-->
      <div class="row"><!--row-->
        <div class="col-lg-6 col-md-12">
          <?php get_template_part('template-parts/mapa'); ?>
        </div>

        <div class="col-lg-6 col-md-12">
            <?php require_once("mapas/norte.php"); ?>
            <?php require_once("mapas/sudeste.php"); ?>
            <?php require_once("mapas/centro-oeste.php"); ?>
            <?php require_once("mapas/nordeste.php"); ?>
            <?php require_once("mapas/sul.php"); ?>

        </div>
      </div><!--row-->
   </div><!--container-->

</article>
<?php get_footer(); ?>