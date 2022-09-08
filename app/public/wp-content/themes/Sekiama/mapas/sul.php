<?php 
   $link1 = get_field('link_seja_nosso_parceiro');
   $link2 = get_field('link_loja_virtual');
?>

<!--Paraná-->
<div id="pr">
   <h3>Localidade: PR - Paraná</h3>
   <?php
   if (have_rows('parceiro_pr')) :
      while (have_rows('parceiro_pr')) : the_row();
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
<!--Paraná-->
<!--Santa Catarina-->
<div id="sc">
   <h3>Localidade: SC - Santa Catarina</h3>
   <?php
   if (have_rows('parceiro_sc')) :
      while (have_rows('parceiro_sc')) : the_row();
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
<!--Santa Catarina-->
<!--Rio Grande do Sul-->
<div id="rs">
   <h3>Localidade: RS - Rio Grande do Sul</h3>
   <?php
   if (have_rows('parceiro_rs')) :
      while (have_rows('parceiro_rs')) : the_row();
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
<!--Rio Grande do Sul-->