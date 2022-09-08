<?php
   // Template Name: Produtos
   
   
   get_header(); ?>
<style>
	.sabor__informacoes {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
/*     height: 100%; */
/*     display: flex; */
    align-items: flex-start;
    justify-content: center;
    flex-direction: column;
    padding: 5% 15%;
    box-sizing: border-box;
    color: #eee0c9;
    line-height: 1.4;
    transform: translateX(-100%);
    transition: all 0.5s cubic-bezier(1, 0.01, 0.05, 1);
    opacity: 0;
		backdrop-filter: blur(10px);
		-webkit-backdrop-filter: blur(10px);
		    height: 100%;
    overflow-y: scroll;

}
	.sabor__img{
		width:100%; object-fit:cover;height: 100%;object-position:center
	}
	.sabor__informacoes--show {
    opacity: 0.9;
    transform: translateX(0);
}
	@media only screen and (max-width: 1023px){
		.sabor__informacoes--show {
    opacity: 1;
}
	.sabor__img{
		height: 60vh;
	}
		.sabor__informacoes {
			overflow-y: scroll;
			-webkit-overflow-scrolling: touch;
			position: fixed;
			width: 100vw;
			height: 100vh;
			top: 0;
			left: 0;
			z-index: 90;
			line-height: 1.5;
			padding: 20% 5%;
			justify-content: flex-start;
		}
	}
	
	
	.btn-sabor, .btn-primary{
		z-index:2
	}
	.x {
    cursor: pointer;
    position: absolute;
    top: 5px;
    right: 12px;
    font-weight: 600;
    text-transform: lowercase;
    font-size: 40px;
}
		.sabor__informacoes table td { 
							padding:5px;
						}
	.sabor__informacoes table tr { 
							min-height:15px;
						}
</style>
<article>
   <section class="padding-small shop-page" >
      <div class="container mb-5">
         <div class="row">
            <div class="col-md-12" >
               <h2 ><?php the_title();?></h2>
               <div><?php the_content();?></div>
            </div>
         </div>
      </div>
	   
      <?php if( have_rows('produtos') ): 
	   	     $id = 1;
         while( have_rows('produtos') ): the_row(); 
	   	 $id++;
         $image = get_sub_field('imagem_do_produto');
           
         if( get_sub_field('posicao_da_imagem') ) { ?>
      <div class="row no-gutters justify-content-end " style="background-color:<?php the_sub_field('cor');?>">
         <div class="col-md-4 align-self-center  p-4 order-2 order-md-0" >
            <h2 style="color:<?php the_sub_field('cor_do_texto');?>"><?php the_sub_field('titulo');?></h2>
            <p style="color:<?php the_sub_field('cor_do_texto');?>"><?php the_sub_field('texto');?></p>
            <a href="<?php the_sub_field('tabela_nutricional');?>/#tab-description" target="_blank" class="mt-2 btn-primary"> VEJA MAIS DETALHES </a>
			   <a href="?add-to-cart=<?php echo esc_html( get_sub_field('produto_escolhido')->ID ); ?>" data-quantity="1" class="btn-primary mt-2" data-product_id="<?php echo esc_html( get_sub_field('produto_escolhido')->ID ); ?>" data-product_sku="" aria-label="Adicionar “Faropop” " rel="nofollow" tabindex="0">Eu Quero</a>

         </div>
         <div class="col-md-6 offset-md-1">
            <figure class="position-relative">
                <?php 
                  if( !empty( $image ) ): ?>
				<div class="csomor-image-zoom">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="sabor__img" />
				</div>
               <?php endif; ?>
            </figure>
         </div>
      </div>
	   
      <?php }else{ ?>
      <div class="row no-gutters" style="background-color:<?php the_sub_field('cor');?>">
         <div class="col-md-6">
              <figure class="position-relative">
               <?php 
                  if( !empty( $image ) ): ?>
				<div class="csomor-image-zoom">
               <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="sabor__img"/>
				</div>

               <?php endif; ?>
				
            </figure>
         </div>
         <div class="col-md-4 offset-md-1  align-self-center p-4" >
            <h2 style="color:<?php the_sub_field('cor_do_texto');?>"><?php the_sub_field('titulo');?></h2>
            <p style="color:<?php the_sub_field('cor_do_texto');?>"><?php the_sub_field('texto');?></p>
            <a href="<?php the_sub_field('tabela_nutricional');?>/#tab-description" class="mt-2 btn-primary"> VEJA MAIS DETALHES </a>
            <a href="?add-to-cart=<?php echo esc_html( get_sub_field('produto_escolhido')->ID ); ?>" data-quantity="1" class="btn-primary mt-2" data-product_id="<?php echo esc_html( get_sub_field('produto_escolhido')->ID ); ?>" data-product_sku="" aria-label="Adicionar “Faropop” " rel="nofollow" tabindex="0">Eu Quero</a>
         </div>
      </div>
      <?php } 
         endwhile; 
         endif; ?>
   </section>
</article>
<?php get_footer(); ?>