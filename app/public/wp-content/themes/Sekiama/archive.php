<?php 
get_header(); ?>




<section class="bg-light">

<?php  get_template_part('entry-header');?>


    <div class="container">
        <div class="row">
            
            <div class="col-md-8">
                <?php  get_template_part('content');?>
            </div>

            <!-- sidebar -->
            <?php get_sidebar('blog'); ?>
        </div>
    </div>

</section>



<?php get_footer(); ?>