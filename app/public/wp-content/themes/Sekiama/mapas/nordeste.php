<?php 
   $link1 = get_field('link_seja_nosso_parceiro');
   $link2 = get_field('link_loja_virtual');
?>
<!--Maranhão-->
<div id="ma">
   <h3>Localidade: MA - Maranhão</h3>
   <?php
   if (have_rows('parceiro_ma')) :
      while (have_rows('parceiro_ma')) : the_row();
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
<!--Maranhão-->
<!--Piauí-->
<div id="pi">
   <h3>Localidade: PI - Piauí</h3>
   <?php
   if (have_rows('parceiro_pi')) :
      while (have_rows('parceiro_pi')) : the_row();
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
<!--Piauí-->
<!--Ceará-->
<div id="ce">
   <h3>Localidade: CE - Ceará</h3>
   <?php
   if (have_rows('parceiro_ce')) :
      while (have_rows('parceiro_ce')) : the_row();
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
<!--Ceará-->
<!--Rio Grande do Norte-->
<div id="rn">
   <h3>Localidade: RN - Rio Grande do Norte</h3>
   <?php
   if (have_rows('parceiro_rn')) :
      while (have_rows('parceiro_rn')) : the_row();
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
<!--Rio Grande do Norte-->
<!--Paraíba-->
<div id="pb">
   <h3>Localidade: PB - Paraíba</h3>
   <?php
   if (have_rows('parceiro_pb')) :
      while (have_rows('parceiro_pb')) : the_row();
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
<!--Paraíba-->
<!--Pernambuco-->
<div id="pe">
   <h3>Localidade: PE - Pernambuco</h3>
   <?php
   if (have_rows('parceiro_pe')) :
      while (have_rows('parceiro_pe')) : the_row();
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
<!--Pernambuco-->
<!--Alagoas-->
<div id="al">
   <h3>Localidade: AL - Alagoas</h3>
   <?php
   if (have_rows('parceiro_al')) :
      while (have_rows('parceiro_al')) : the_row();
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
<!--Alagoas-->
<!--Sergipe-->
<div id="se">
   <h3>Localidade: SE - Sergipe</h3>
   <?php
   if (have_rows('parceiro_se')) :
      while (have_rows('parceiro_se')) : the_row();
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
<!--Sergipe-->
<!--Bahia-->
<div id="ba">
   <h3>Localidade: BA - Bahia</h3>
   <?php
   if (have_rows('parceiro_ba')) :
      while (have_rows('parceiro_ba')) : the_row();
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
<!--Bahia-->