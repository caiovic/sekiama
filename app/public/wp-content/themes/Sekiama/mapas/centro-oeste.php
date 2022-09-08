<?php 
   $link1 = get_field('link_seja_nosso_parceiro');
   $link2 = get_field('link_loja_virtual');
?>
<!--Mato Grosso-->
<div id="mt">
   <h3>Localidade: MT - Mato Grosso</h3>
   <?php
   if (have_rows('parceiro_mt')) :
      while (have_rows('parceiro_mt')) : the_row();
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
<!--Mato Grosso-->
<!--Mato Grosso do Sul-->
<div id="ms">
   <h3>Localidade: MS - Mato Grosso do Sul</h3>
   <?php
   if (have_rows('parceiro_ms')) :
      while (have_rows('parceiro_ms')) : the_row();
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
<!--Mato Grosso do Sul-->
<!--Goías-->
<div id="go">
   <h3>Localidade: GO - Goiás</h3>
   <?php
   if (have_rows('parceiro_go')) :
      while (have_rows('parceiro_go')) : the_row();
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
<!--Goías-->
<!--Distrito Federal-->
<div id="df">
   <h3>Localidade: DF - Distrito Federal</h3>
   <?php
   if (have_rows('parceiro_df')) :
      while (have_rows('parceiro_df')) : the_row();
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
<!--Distrito Federal-->