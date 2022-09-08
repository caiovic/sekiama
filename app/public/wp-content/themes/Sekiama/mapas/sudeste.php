<?php 
   $link1 = get_field('link_seja_nosso_parceiro');
   $link2 = get_field('link_loja_virtual');
?>

<!--São Paulo-->
<div id="sp">
  <h3>Localidade: SP - São Paulo</h3>
    <?php
      if( have_rows('parceiro_sp') ):
        while( have_rows('parceiro_sp') ) : the_row();
          // Load sub field value.
          $nome = get_sub_field('nome');
          $info = get_sub_field('informacoes');
    ?>
         <?php 
            if(!$nome){
               ?>
                  <div>
                     <div class="Wrap_btn_onde_estamos">
                        <a href="<?php echo $link1; ?>"><button>Seja nosso parceiro</button></a>

                        <a href="<?php echo $link2; ?>"><button>Compre em nossa loja virtual</button></a>
                     </div>
                  </div>
         <?php
            } elseif (isset($nome)){
               ?>
                  <div>
                     <h4><?php echo $nome; ?></h4>

                     <div>
                        <?php echo $info; ?>
                     </div>
                  </div>
               <?php
            }
         ?>
  <?php
    endwhile;
    else :
    endif;
  ?>
</div>
<!--São Paulo-->
<!--Minas Gerais-->
<div id="mg">
  <h3>Localidade: MG - Minas Gerais</h3>
    <?php
      if( have_rows('amazonas') ):
        while( have_rows('amazonas') ) : the_row();
          // Load sub field value.
          $nome = get_sub_field('nome');
          $info = get_sub_field('informacoes');
    ?>
         <?php 
            if(!$nome){
               ?>
                  <div>
                     <div class="Wrap_btn_onde_estamos">
                        <a href="<?php echo $link1; ?>"><button>Seja nosso parceiro</button></a>

                        <a href="<?php echo $link2; ?>"><button>Compre em nossa loja virtual</button></a>
                     </div>
                  </div>
         <?php
            } elseif (isset($nome)){
               ?>
                  <div>
                     <h4><?php echo $nome; ?></h4>

                     <div>
                        <?php echo $info; ?>
                     </div>
                  </div>
               <?php
            }
         ?>
  <?php
    endwhile;
    else :
    endif;
  ?>
</div>
<!--Minas Gerais-->
<!--Rio de Janeiro-->
<div id="rj">
  <h3>Localidade: RJ - Rio de Janeiro</h3>
    <?php
      if( have_rows('parceiro_rj') ):
        while( have_rows('parceiro_rj') ) : the_row();
          // Load sub field value.
          $nome = get_sub_field('nome');
          $info = get_sub_field('informacoes');
    ?>
         <?php 
            if(!$nome){
               ?>
                  <div>
                     <div class="Wrap_btn_onde_estamos">
                        <a href="<?php echo $link1; ?>"><button>Seja nosso parceiro</button></a>

                        <a href="<?php echo $link2; ?>"><button>Compre em nossa loja virtual</button></a>
                     </div>
                  </div>
         <?php
            } elseif (isset($nome)){
               ?>
                  <div>
                     <h4><?php echo $nome; ?></h4>

                     <div>
                        <?php echo $info; ?>
                     </div>
                  </div>
               <?php
            }
         ?>
  <?php
    endwhile;
    else :
    endif;
  ?>
</div>
<!--Rio de Janeiro-->
<!--Espirito Santo-->
<div id="es">
  <h3>Localidade: ES - Espírito Santo</h3>
    <?php
      if( have_rows('parceiro_es') ):
        while( have_rows('parceiro_es') ) : the_row();
          // Load sub field value.
          $nome = get_sub_field('nome');
          $info = get_sub_field('informacoes');
    ?>
         <?php 
            if(!$nome){
               ?>
                  <div>
                     <div class="Wrap_btn_onde_estamos">
                        <a href="<?php echo $link1; ?>"><button>Seja nosso parceiro</button></a>

                        <a href="<?php echo $link2; ?>"><button>Compre em nossa loja virtual</button></a>
                     </div>
                  </div>
         <?php
            } elseif (isset($nome)){
               ?>
                  <div>
                     <h4><?php echo $nome; ?></h4>

                     <div>
                        <?php echo $info; ?>
                     </div>
                  </div>
               <?php
            }
         ?>
  <?php
    endwhile;
    else :
    endif;
  ?>
</div>
<!--Espirito Santo-->