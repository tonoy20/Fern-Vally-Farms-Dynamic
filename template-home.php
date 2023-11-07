<?php 
    // Template Name: home
get_header(); ?>
<div class="slider">
    <div class="homebannerimg" style="background-image: url(<?php the_field('home_slide_banner') ?> );">
        <h1 class="articleh4"><?php the_field('home_slide_banner_title') ?></h1>
        <p class="articlep4"><?php the_field('home_slide_banner_title2') ?></p>
    </div>
    <div class="homebannerimg" style="background-image: url(<?php the_field('home_slide_banner') ?> );">
        <h1 class="articleh4"><?php the_field('home_slide_banner_title') ?></h1>
        <p class="articlep4"><?php the_field('home_slide_banner_title2') ?></p>
    </div>
</div>

<div class="container">
    <div class="shop_header">
        <div class="row">
            <div class="col-5">
                <h1 class="shop_h1"><?php the_field('home_title_1') ?></h1>
            </div>
            <div class="col-7">
                <h1 class="Rectangle_1_copy"></h1>
            </div>
        </div>
    </div>


    <div class="shop text-center">
        <div class="row shop_div">
            <?php 
                if(have_rows('home_shop')) :
                    while( have_rows('home_shop') ) : the_row();
            ?>
            <div class="card shop_card col">
                <span class="badge"><?php the_sub_field('badge'); ?>%<br>CBD</span>
                <img class="card-img-top card_img_top" src="<?php the_sub_field('home_image_1'); ?>" alt="Card image cap">
                <div class="card-body d-flex flex-column align-items-center">
                    <a href="#" class="btn btn-outline-secondary shop_div_btn"><?php the_sub_field('button_1'); ?></a>
                </div>
            </div>
            <?php 
                    endwhile;
                endif;
            ?>
        </div>
    </div>
</div>


<div class="container">
    <div class="follow">
        <div class="shop_header2">
            <div class="row">
                <div class="col-6">
                    <h1 class="shop_h2"><?php the_field('home_title_2') ?></h1>
                </div>
                <div class="col-6">
                    <h1 class="Rectangle_2_copy"></h1>
                </div>
            </div>
        </div>

        <div class="slid_cls">
            <div class="slidimg">
                <?php 
                    if(have_rows('home_slider_2')) :
                        while(have_rows('home_slider_2')) : the_row();
                ?>
                            <img src="<?php the_sub_field('slider_image') ?>">
                <?php 
                        endwhile;
                    endif;
                ?>
            </div>
        </div>
    </div>
</div>

<div class="articleimg" style="background-image: url(<?php the_field('home_background_image_2') ?> );">
    <div class="container" >
        <h1 class="articleh1"><?php the_field('home_background_title') ?></h1>
        <p class="articlep1"><?php the_field('home_background_description') ?></p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-5">
            <h1 class="shop_h3"><?php the_field('home_title_3') ?></h1>
        </div>
        <div class="col-7">
            <h1 class="Rectangle_3_copy"></h1>
        </div>
    </div>


    <div class="article">
        <div class="row">
            <?php 
                if(have_rows('home_article')) :
                    while( have_rows('home_article') ) : the_row();
            ?>
            <div class="card col-md-4 article_card">
                <img class="card-img-top" src="<?php the_sub_field('home_article_image'); ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title card_h1"><?php the_sub_field('home_article_title'); ?></h5>
                    <p class="card-text card_t1"><?php the_sub_field('home_article_description'); ?></p>
                    <a href="#">
                        <p class="card_f">Read More ></p>
                    </a>
                </div>
            </div>
            <?php 
                 endwhile;
                endif;
            ?>
        </div>
    </div>
</div>



<?php get_footer(); ?>