<?php get_header(); ?>


<article class="single-post__layout" itemtype="http://schema.org/Article" itemscope="">


    <div class="container">

        <div class="row">

            <div class="col-md-12">
                <div class="single-post-content">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <h1><?php the_title(); ?></h1>
                            <?php get_template_part('template-parts/info-post'); ?>
                            <br>
                            <?php the_excerpt(); ?>

                            <figure class="thumbnail-post mb-2">
                                <?php the_post_thumbnail('large', ['alt' => esc_html(get_the_title())]); ?>
                            </figure>
                            <div class="row">
                                <div class="col-md-1 d-flex flex-md-column">
                                    <a class="mt-md-5 mr-2" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink() ?>" title="Compartilhe no Facebook" target="_blank" rel="noopener">
                                        <svg width="20 " class="links-menu-icone" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.9 0.166626H1.1C0.808262 0.166626 0.528473 0.292176 0.322183 0.515657C0.115893 0.739138 0 1.04224 0 1.35829V20.6416C0 20.7981 0.0284524 20.9531 0.0837326 21.0977C0.139013 21.2422 0.220038 21.3736 0.322183 21.4843C0.424327 21.5949 0.54559 21.6827 0.679048 21.7426C0.812506 21.8025 0.955546 21.8333 1.1 21.8333H10.68V13.4375H8.08V10.1875H10.68V7.74996C10.6261 7.1777 10.6885 6.5996 10.8627 6.05621C11.0369 5.51282 11.3188 5.0173 11.6885 4.6044C12.0582 4.19151 12.5068 3.87124 13.0028 3.66605C13.4989 3.46086 14.0304 3.37573 14.56 3.41663C15.3383 3.41144 16.1163 3.45484 16.89 3.54663V6.47163H15.3C14.04 6.47163 13.8 7.12163 13.8 8.06413V10.155H16.8L16.41 13.405H13.8V21.8333H18.9C19.0445 21.8333 19.1875 21.8025 19.321 21.7426C19.4544 21.6827 19.5757 21.5949 19.6778 21.4843C19.78 21.3736 19.861 21.2422 19.9163 21.0977C19.9715 20.9531 20 20.7981 20 20.6416V1.35829C20 1.2018 19.9715 1.04684 19.9163 0.902262C19.861 0.757682 19.78 0.626314 19.6778 0.515657C19.5757 0.405001 19.4544 0.317223 19.321 0.257336C19.1875 0.197449 19.0445 0.166626 18.9 0.166626Z" fill="#1A0E66" />
                                        </svg>

                                    </a>
                                    <a class="mt-md-2 mr-2" href="https://api.whatsapp.com/send?text=<?php echo get_permalink() ?>" data-action="share/whatsapp/share" title="Compartilhe no Whatsapp" target="_blank" rel="noopener">

                                        <svg width="20" class="links-menu-icone" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4.7775C19.9888 4.3245 19.9554 3.87241 19.9 3.423C19.8253 3.02938 19.7009 2.648 19.53 2.289C19.3513 1.89956 19.1112 1.54458 18.82 1.239C18.5261 0.936815 18.1886 0.68522 17.82 0.4935C17.4776 0.317567 17.1144 0.190442 16.74 0.1155C16.3161 0.0488243 15.8886 0.0102481 15.46 0H4.55C4.11857 0.0117982 3.68801 0.0468442 3.26 0.105C2.88512 0.183402 2.52191 0.314058 2.18 0.4935C1.8091 0.681174 1.47103 0.933211 1.18 1.239C0.892204 1.54761 0.652591 1.90196 0.47 2.289C0.302444 2.64848 0.181373 3.02985 0.11 3.423C0.0464994 3.86813 0.0097601 4.31702 0 4.767C0 4.9665 0 5.25 0 5.334V15.666C0 15.7815 0 16.0335 0 16.2225C0.0112364 16.6755 0.0446136 17.1276 0.0999999 17.577C0.174668 17.9706 0.299103 18.352 0.47 18.711C0.648737 19.1004 0.888773 19.4554 1.18 19.761C1.47391 20.0632 1.81139 20.3148 2.18 20.5065C2.52236 20.6824 2.88558 20.8096 3.26 20.8845C3.68393 20.9512 4.11145 20.9898 4.54 21H15.45C15.8814 20.9882 16.312 20.9532 16.74 20.895C17.1149 20.8166 17.4781 20.6859 17.82 20.5065C18.1909 20.3188 18.529 20.0668 18.82 19.761C19.1078 19.4524 19.3474 19.098 19.53 18.711C19.6976 18.3515 19.8186 17.9701 19.89 17.577C19.9535 17.1319 19.9902 16.683 20 16.233C20 16.0335 20 15.7815 20 15.666V5.334C20 5.25 20 4.9665 20 4.7775ZM10.23 17.85C9.02906 17.8438 7.84913 17.5187 6.8 16.905L3 17.955L4 14.049C3.35511 12.9113 3.00999 11.6139 3 10.29C3.00398 8.80207 3.4272 7.34865 4.21636 6.11279C5.00552 4.87693 6.12532 3.91391 7.43473 3.345C8.74414 2.7761 10.1846 2.62675 11.5747 2.91579C12.9648 3.20482 14.2423 3.91929 15.2464 4.96923C16.2505 6.01917 16.9363 7.35762 17.2173 8.816C17.4984 10.2744 17.3622 11.7875 16.8258 13.1647C16.2894 14.5419 15.3769 15.7217 14.2032 16.5555C13.0295 17.3892 11.647 17.8396 10.23 17.85ZM10.23 4.0635C9.16981 4.07624 8.13177 4.38373 7.22156 4.95467C6.31135 5.52562 5.56148 6.33962 5.0483 7.3138C4.53512 8.28798 4.27695 9.38755 4.30008 10.5006C4.32322 11.6136 4.62683 12.7003 5.18 13.65L5.32 13.8915L4.72 16.191L7 15.54L7.22 15.6765C8.12957 16.239 9.1644 16.5397 10.22 16.548C11.8113 16.548 13.3374 15.8843 14.4626 14.7028C15.5879 13.5213 16.22 11.9189 16.22 10.248C16.22 8.57714 15.5879 6.97471 14.4626 5.79323C13.3374 4.61175 11.8113 3.948 10.22 3.948L10.23 4.0635ZM13.73 13.0095C13.599 13.2389 13.4236 13.4369 13.2152 13.5906C13.0068 13.7443 12.7699 13.8504 12.52 13.902C12.1465 13.9737 11.7621 13.9484 11.4 13.8285C11.0593 13.7167 10.7254 13.5834 10.4 13.4295C9.16374 12.7781 8.10944 11.8014 7.34 10.5945C6.92188 10.0353 6.66819 9.36028 6.61 8.652C6.60405 8.35778 6.65705 8.06553 6.76558 7.7942C6.87412 7.52287 7.03575 7.27852 7.24 7.077C7.30016 7.00538 7.37397 6.94781 7.45665 6.90802C7.53934 6.86823 7.62905 6.8471 7.72 6.846H8C8.11 6.846 8.26 6.846 8.4 7.1715C8.54 7.497 8.91 8.4735 8.96 8.568C8.98457 8.61837 8.99739 8.67415 8.99739 8.73075C8.99739 8.78734 8.98457 8.84313 8.96 8.8935C8.91579 9.0076 8.85508 9.11385 8.78 9.2085C8.69 9.324 8.59 9.4605 8.51 9.5445C8.43 9.6285 8.33 9.7335 8.43 9.9225C8.70209 10.4046 9.03888 10.8431 9.43 11.2245C9.85593 11.6197 10.3429 11.9357 10.87 12.159C11.05 12.2535 11.16 12.243 11.26 12.159C11.36 12.075 11.71 11.613 11.83 11.424C11.95 11.235 12.07 11.2665 12.23 11.3295C12.39 11.3925 13.28 11.844 13.46 11.9385C13.64 12.033 13.75 12.075 13.8 12.159C13.8434 12.4338 13.8193 12.7157 13.73 12.978V13.0095Z" fill="#2A784D" />
                                        </svg>

                                    </a>

                                    <a class="mt-md-2 mr-2" href="https://twitter.com/intent/tweet?text=%3A%20<?php the_title(); ?><?php echo get_permalink(); ?>" title="Compartilhe no Twitter" target="_blank" rel="noopener">
                                        <svg width="20" class="links-menu-icone" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 2.79997C19.2483 3.12606 18.4534 3.34163 17.64 3.43997C18.4982 2.92729 19.1413 2.12075 19.45 1.16997C18.6436 1.65003 17.7608 1.98826 16.84 2.16997C16.2245 1.50254 15.405 1.05826 14.5098 0.906817C13.6147 0.755372 12.6945 0.905324 11.8938 1.33315C11.093 1.76099 10.4569 2.4425 10.0852 3.2708C9.71355 4.09911 9.62729 5.02736 9.84 5.90997C8.20943 5.82749 6.61444 5.40292 5.15865 4.66383C3.70287 3.92474 2.41885 2.88766 1.39 1.61997C1.02914 2.25013 0.839519 2.96379 0.84 3.68997C0.83872 4.36435 1.00422 5.02858 1.32176 5.62353C1.63929 6.21848 2.09902 6.72568 2.66 7.09997C2.00798 7.08222 1.36989 6.90726 0.8 6.58997V6.63997C0.804887 7.58486 1.13599 8.49906 1.73731 9.22793C2.33864 9.9568 3.17326 10.4556 4.1 10.64C3.74326 10.7485 3.37287 10.8058 3 10.81C2.74189 10.807 2.48442 10.7835 2.23 10.74C2.49391 11.5528 3.00462 12.2631 3.69107 12.7721C4.37753 13.2811 5.20558 13.5635 6.06 13.58C4.6172 14.7152 2.83588 15.3348 1 15.34C0.665735 15.3411 0.331736 15.321 0 15.28C1.87443 16.4902 4.05881 17.1327 6.29 17.13C7.82969 17.146 9.35714 16.855 10.7831 16.274C12.2091 15.6931 13.505 14.8338 14.5952 13.7465C15.6854 12.6591 16.548 11.3654 17.1326 9.94087C17.7172 8.51639 18.012 6.98969 18 5.44997C18 5.27996 18 5.09997 18 4.91997C18.7847 4.33478 19.4615 3.61739 20 2.79997Z" fill="#15ADCE" />
                                        </svg>

                                    </a>
                                </div>
                                <div class="col-md-8 mt-md-4 content-post-title">

                                    <?php the_content(); ?>
                                </div>
                            </div>



                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
                
                <hr>
                <!-- comments -->
                <?php comments_template(); ?>

                <span class="detail-logo"></span>
                <h2 class="text-center">Mais receitas</h2>
                <br>
                <div class="row mb-5">

                    <!-- previous post -->
                    <?php
                    $previous_post = get_previous_post();
                    if (!empty($previous_post)) : ?>
                        <div class="col-md-4 posts-preview text-center">

                            <div class="post-box-a">
                                <a href="<?php echo esc_url(get_permalink($previous_post->ID)); ?>" title="<?php echo esc_attr($previous_post->post_title); ?>">
                                    <figure>
                                        <?php echo get_the_post_thumbnail($previous_post->ID, 'post review',array('class' => 'img-center'), ['alt' => esc_html(get_the_title())]); ?>
                                    </figure>
                                    <div class="content-post-box text-black">
                                        <h3 class="font-gotham text-bold h4 text-uppercase"><?php echo esc_attr($previous_post->post_title); ?></h3>
                                        <?php echo esc_attr($previous_post->post_excerpt); ?>
                                    </div>
                                    <br>
                                    <div>
                                        <svg style="vertical-align: text-bottom;" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 0C8.02219 0 6.08879 0.58649 4.4443 1.6853C2.79981 2.78412 1.51809 4.3459 0.761209 6.17317C0.00433284 8.00043 -0.193701 10.0111 0.192152 11.9509C0.578004 13.8907 1.53041 15.6725 2.92894 17.0711C4.32746 18.4696 6.10929 19.422 8.0491 19.8079C9.98891 20.1937 11.9996 19.9957 13.8268 19.2388C15.6541 18.4819 17.2159 17.2002 18.3147 15.5557C19.4135 13.9112 20 11.9778 20 10C20 8.68678 19.7413 7.38642 19.2388 6.17317C18.7363 4.95991 17.9997 3.85752 17.0711 2.92893C16.1425 2.00035 15.0401 1.26375 13.8268 0.761205C12.6136 0.258658 11.3132 0 10 0ZM10 18C8.41775 18 6.87104 17.5308 5.55544 16.6518C4.23985 15.7727 3.21447 14.5233 2.60897 13.0615C2.00347 11.5997 1.84504 9.99113 2.15372 8.43928C2.4624 6.88743 3.22433 5.46197 4.34315 4.34315C5.46197 3.22433 6.88743 2.4624 8.43928 2.15372C9.99113 1.84504 11.5997 2.00346 13.0615 2.60896C14.5233 3.21447 15.7727 4.23984 16.6518 5.55544C17.5308 6.87103 18 8.41775 18 10C18 12.1217 17.1572 14.1566 15.6569 15.6569C14.1566 17.1571 12.1217 18 10 18ZM14 9H11V6C11 5.73478 10.8946 5.48043 10.7071 5.29289C10.5196 5.10536 10.2652 5 10 5C9.73479 5 9.48043 5.10536 9.2929 5.29289C9.10536 5.48043 9 5.73478 9 6V9H6C5.73479 9 5.48043 9.10536 5.2929 9.29289C5.10536 9.48043 5 9.73478 5 10C5 10.2652 5.10536 10.5196 5.2929 10.7071C5.48043 10.8946 5.73479 11 6 11H9V14C9 14.2652 9.10536 14.5196 9.2929 14.7071C9.48043 14.8946 9.73479 15 10 15C10.2652 15 10.5196 14.8946 10.7071 14.7071C10.8946 14.5196 11 14.2652 11 14V11H14C14.2652 11 14.5196 10.8946 14.7071 10.7071C14.8946 10.5196 15 10.2652 15 10C15 9.73478 14.8946 9.48043 14.7071 9.29289C14.5196 9.10536 14.2652 9 14 9Z" fill="#B41E1E" />
                                        </svg>

                                        <b class="text-black"> VER MAIS</b>
                                    </div>
                                </a>
                            </div>
                        </div>

                    <?php endif; ?>

                    <!-- next post -->
                    <?php
                    $next_post = get_next_post();
                    if (!empty($next_post)) : ?>
                        <div class="col-md-4 posts-preview text-center">

                            <div class="post-box-a">
                                <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" title="<?php echo esc_attr($next_post->post_title); ?>">
                                    <figure>
                                        <?php echo get_the_post_thumbnail($next_post->ID, 'post review',array('class' => 'img-center'), ['alt' => esc_html(get_the_title())]); ?>
                                    </figure>
                                  
                                    <div class="content-post-box text-black">
                                        <h3 class=" font-gotham text-bold h4 text-uppercase"><?php echo esc_attr($next_post->post_title); ?></h3>
                                        <?php echo esc_attr($previous_post->post_excerpt); ?>

                                    </div>
                                    <br>
                                    <div>
                                        <svg style="vertical-align: text-bottom;" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 0C8.02219 0 6.08879 0.58649 4.4443 1.6853C2.79981 2.78412 1.51809 4.3459 0.761209 6.17317C0.00433284 8.00043 -0.193701 10.0111 0.192152 11.9509C0.578004 13.8907 1.53041 15.6725 2.92894 17.0711C4.32746 18.4696 6.10929 19.422 8.0491 19.8079C9.98891 20.1937 11.9996 19.9957 13.8268 19.2388C15.6541 18.4819 17.2159 17.2002 18.3147 15.5557C19.4135 13.9112 20 11.9778 20 10C20 8.68678 19.7413 7.38642 19.2388 6.17317C18.7363 4.95991 17.9997 3.85752 17.0711 2.92893C16.1425 2.00035 15.0401 1.26375 13.8268 0.761205C12.6136 0.258658 11.3132 0 10 0ZM10 18C8.41775 18 6.87104 17.5308 5.55544 16.6518C4.23985 15.7727 3.21447 14.5233 2.60897 13.0615C2.00347 11.5997 1.84504 9.99113 2.15372 8.43928C2.4624 6.88743 3.22433 5.46197 4.34315 4.34315C5.46197 3.22433 6.88743 2.4624 8.43928 2.15372C9.99113 1.84504 11.5997 2.00346 13.0615 2.60896C14.5233 3.21447 15.7727 4.23984 16.6518 5.55544C17.5308 6.87103 18 8.41775 18 10C18 12.1217 17.1572 14.1566 15.6569 15.6569C14.1566 17.1571 12.1217 18 10 18ZM14 9H11V6C11 5.73478 10.8946 5.48043 10.7071 5.29289C10.5196 5.10536 10.2652 5 10 5C9.73479 5 9.48043 5.10536 9.2929 5.29289C9.10536 5.48043 9 5.73478 9 6V9H6C5.73479 9 5.48043 9.10536 5.2929 9.29289C5.10536 9.48043 5 9.73478 5 10C5 10.2652 5.10536 10.5196 5.2929 10.7071C5.48043 10.8946 5.73479 11 6 11H9V14C9 14.2652 9.10536 14.5196 9.2929 14.7071C9.48043 14.8946 9.73479 15 10 15C10.2652 15 10.5196 14.8946 10.7071 14.7071C10.8946 14.5196 11 14.2652 11 14V11H14C14.2652 11 14.5196 10.8946 14.7071 10.7071C14.8946 10.5196 15 10.2652 15 10C15 9.73478 14.8946 9.48043 14.7071 9.29289C14.5196 9.10536 14.2652 9 14 9Z" fill="#B41E1E" />
                                        </svg>

                                        <b class="text-black"> VER MAIS</b>
                                    </div>
                                </a>
                            </div>
                        </div>

                    <?php endif; ?>
                </div>
            </div>
            <!-- sidebar -->


        </div>
    </div>

    <!-- dados estruturados -->

    <div class="hidden-meta" itemprop="author" itemscope itemtype="http://schema.org/Person">
        <meta itemprop="name" content="<?php echo esc_html(get_the_author()); ?>">
    </div>
    <?php if (has_post_thumbnail()) :
        $thumb_url_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
    ?>
        <div class="hidden-meta" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
            <meta itemprop="url" content="<?php echo esc_url($thumb_url_array[0]); ?>">
            <meta itemprop="width" content="<?php echo esc_html($thumb_url_array[1]); ?>">
            <meta itemprop="height" content="<?php echo esc_html($thumb_url_array[2]); ?>">
        </div>

    <?php endif; ?>



</article>



<?php get_footer(); ?>