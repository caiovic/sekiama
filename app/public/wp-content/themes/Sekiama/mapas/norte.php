<?php 
   $link1 = get_field('link_seja_nosso_parceiro');
   $link2 = get_field('link_loja_virtual');
?>

<!--Amazonas-->
<div id="am">
   <h3>Localidade: AM - Amazonas</h3>
   <?php
   if (have_rows('parceiro_am')) :
      while (have_rows('parceiro_am')) : the_row();
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
<!--Amazonas-->
<!--Pará-->
<div id="pa">
   <h3>Localidade: PA - Pará</h3>
   <?php
   if (have_rows('parceiro_pa')) :
      while (have_rows('parceiro_pa')) : the_row();
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
<!--Pará-->
<!--Acre-->
<div id="ac">
   <h3>Localidade: AC - Acre</h3>
   <?php
   if (have_rows('parceiro_ac')) :
      while (have_rows('parceiro_ac')) : the_row();
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
<!--Acre-->
<!--Rondonia-->
<div id="ro">
   <h3>Localidade: RO - Rondônia</h3>
   <?php
   if (have_rows('parceiro_ro')) :
      while (have_rows('parceiro_ro')) : the_row();
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
<!--Rondonia-->
<!--Roraima-->
<div id="rr">
   <h3>Localidade: RR - Roraima</h3>
   <?php
   if (have_rows('parceiro_rr')) :
      while (have_rows('parceiro_rr')) : the_row();
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
<!--Roraima-->
<!--Amapá-->
<div id="ap">
   <h3>Localidade: AP - Amapá</h3>
   <?php
   if (have_rows('parceiro_ap')) :
      while (have_rows('parceiro_ap')) : the_row();
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
<!--Amapá-->
<!--Tocantins-->
<div id="to">
   <h3>Localidade: TO - Tocantins</h3>
   <?php
   if (have_rows('parceiro_to')) :
      while (have_rows('parceiro_to')) : the_row();
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
<!--Tocantins-->