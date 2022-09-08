<section class="padding-small">
  <div class="container">
    <div class="timeline">
      <?php
      if( have_rows('timeline') ):
          while( have_rows('timeline') ) : the_row();
              $title = get_sub_field('_titulo_timeline');
              $desc = get_sub_field('_conteudo_textual_timeline');
              $image = get_sub_field('_foto_em_destaque_timeline');
              $position = get_sub_field('_timeline_na_direita');

              if( $position ) { ?>
      <div class="box_left">
        <div class="feature_img">
          <?php 
                      if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>
        <div class="content_text">
          <span class="detail-logo"></span>
          <h3><?php echo $title; ?></h3>
          <div><?php echo $desc; ?></div>
        </div>
      </div>

      <?php }else{ ?>

      <div class="box_right">
        <div class="feature_img">
          <?php 
                      if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>
        <div class="content_text">
          <span class="detail-logo"></span>
          <h3><?php echo $title; ?></h3>
          <div><?php echo $desc; ?></div>
        </div>
      </div>

      <?php } 
        endwhile;
        else :
      endif;
    ?>
    </div>
  </div>
</section>