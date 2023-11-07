<style>
    .blg_h {
        color: rgb(90, 90, 90);
    }
    .cate_p1 {
        font-family: 'Ropa Sans', sans-serif;
        color: rgb(135, 135, 135);
        font-size: 17px;
        font-weight: 500;
        line-height: 1.3;
        word-spacing: 3px;
    }
    .cate_h12 {
        color: rgb(90, 90, 90);
        font-weight: 700;
        font-size: 18px;
        word-spacing: 2px;
    }
    .cat_pd {
        color: rgb(90, 90, 90);
    }
    .card_h12 {
    font-size: 14px;
    letter-spacing: 1px;
    color: rgb(0, 72, 38);
    font-weight: 500;
    font-style: italic;
    text-transform: uppercase;
    }
</style>
<?php get_header(); ?>

<div class="container">
    <div class="text-center pt-3">
        <div class="row">
            <?php while (have_posts()) {
                the_post(); ?>
                <div class="card col-4">
                    <a href="<?php the_permalink(); ?>"><span class="badge badge2">15.8%<br>CBD</span></a>
                    <div>
                        <a href="<?php the_permalink() ?>"><?php
                                                            if (has_post_thumbnail()) {
                                                                the_post_thumbnail(array(250,250));
                                                            }
                                                            ?></a>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <a href="<?php the_permalink(); ?>">
                            <h4 class="cate_h12"><?php the_title(); ?></h4>
                            <h6 class="card_h12">Category : </h6>
                            <?php
                            foreach ((get_the_category()) as $category) {
                                ?>
                                <h6 class="card_h12"><?php echo $category->cat_name; ?></h6>
                                <?php
                            }
                            ?>
                            <p class="cate_p1 pt-2">Potency: 15.8% <br> CBD / < 0.3 DELTA 9 THC</p>
                                    
                                    <div class="prod_rev_per">Last Updated On: <?php the_time('j F, Y'); ?></div>
                                    <?php
                                    $excr = wp_trim_words(get_the_excerpt(), 15);
                                    echo '<div class="pro_rev_cmnt">';
                                    echo $excr;
                                    echo "</div>";
                                    ?>
                        </a>
                        <a class="prod_rev_per" href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="container p-5">
    <?php wp_pagenavi(); ?>
</div>
<?php get_footer(); ?>