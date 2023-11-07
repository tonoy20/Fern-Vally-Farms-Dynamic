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

    .prod_p2 {
        font-family: 'Open Sans', sans-serif;
        color: rgb(135, 135, 135);
        word-spacing: 5px;
    }

    .card_h12 {
        font-size: 18px;
        letter-spacing: 1px;
        color: rgb(0, 72, 38);
        font-weight: 500;
        font-style: italic;
        text-transform: uppercase;
    }
</style>
<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <section class="content-area content-full-width">
                <?php while (have_posts()) {
                    the_post() ?>
                    <article class="article-full">
                        <header class="d-flex justify-content-center">
                            <h1 class="blg_h pt-4"><?php the_title(); ?></h1>
                        </header>
                        <?php
                        foreach ((get_the_category()) as $category) {
                        ?>
                            <h6 class="d-flex justify-content-center card_h12">Category : <?php echo $category->cat_name; ?></h6>
                        <?php
                        }
                        ?>
                        <h5 class="d-flex justify-content-center pt-3">By : <?php the_author(); ?></h5>
                        <div class="d-flex justify-content-center prod_rev_per">Last Updated On: <?php the_time('j F, Y'); ?></div>
                        <div class="d-flex justify-content-center">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('category-thumb'); 

                                // $img_id = get_post_thumbnail_id( $blog_results->post->ID);
                                // $img_sizes = wp_get_registered_image_subsizes();
                                // echo '<pre>';
                                // print_r($img_sizes);
                                // echo '</pre>';
                            }
                            ?>
                        </div>
                        <div class="pt-4">
                            <p class="cate_p1">Potency: 15.8% <br> CBD / < 0.3 DELTA 9 THC</p>
                                    <!-- <p class="d-flex justify-content-between cat_pd">$9.00/g <span class="cate_star">&#9733;&#9733;&#9733; [ 26 ]</span></p> -->
                        </div>
                        <div class="prod_p2 pb-4"><?php the_content(); ?></div>
                    </article>
                <?php } ?>
            </section>
        </div>
        <!-- sideBar Start -->
        <div class="col-4 pt-5">
            <div class="sidebar1">
                <h2 class="d-flex justify-content-center pt-4 pb-3">CATEGORY</h2>
                <?php
                wp_nav_menu(array('theme_location' => 'side-bar', 'menu_class' => 'd-flex flex-column'));
                ?>
                <!-- display recent post -->
                <div class="pt-4 pb-3">
                    <h2 class="d-flex justify-content-center">RECENT POSTS</h2>
                    <ul>
                        <?php
                        // Define our WP Query Parameters
                        $the_query = new WP_Query('posts_per_page=2'); ?>

                        <?php
                        // Start our WP Query
                        while ($the_query->have_posts()) : $the_query->the_post();
                            // Display the Post Title with Hyperlink
                        ?>

                            <li class="pt-4"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                            <div class="row">
                                <div class="col-6">
                                    <a href="<?php the_permalink() ?>"><?php
                                                                        if (has_post_thumbnail()) {
                                                                            the_post_thumbnail('thumbnail');
                                                                        }
                                                                        ?></a>
                                </div>
                                <div class="col-6">
                                    <div class="rec_date pb-2">Last Updated On: <?php the_time('j F, Y'); ?></div>
                                    <?php
                                    $excr = wp_trim_words(get_the_excerpt(), 8);
                                    echo '<div class="recent_p">';
                                    echo $excr;
                                    echo "</div>";
                                    ?>
                                </div>
                            </div>
                        <?php
                        // Repeat the process and reset once it hits the limit
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- sideBar End -->
    </div>
</div>

<div class="container">
    <div class="row pb-3">
        <div class="col-7">
            <div><?php next_post_link('%link', '<< Previous'); ?></div>
        </div>
        <div class="col-5">
            <div><?php previous_post_link('%link', 'Next >>'); ?></div>
        </div>
    </div>
</div>
<!-- Related Posts start -->
<div class="container">
    <div class="row">
        <?php $categories = get_the_category($post->ID); ?>
        <?php if ($categories) : ?>
            <?php $category_ids = array(); ?>
            <?php foreach ($categories as $individual_category) : ?>
                <?php $category_ids[] = $individual_category->term_id; ?>
            <?php endforeach; ?>
            <?php $args = array(
                'category__in' => $category_ids,
                'post__not_in' => array($post->ID),
                'posts_per_page' => 3,
                'ignore_sticky_posts' => 1,
                'oderby' => 'rand'
            ); ?>
            <?php $my_query = new WP_Query($args); ?>
            <?php if ($my_query->have_posts()) : ?>
                <section class="container">
                    <h3 class="d-flex justify-content-center pt-2">RELATED POSTS</h3>
                    <div class="row">
                        <?php while ($my_query->have_posts()) {
                            $my_query->the_post(); ?>
                            <div class="card col-4">
                                <div class="rela_img">
                                    <a href="<?php the_permalink() ?>"><?php
                                                                        if (has_post_thumbnail()) {
                                                                            the_post_thumbnail(array(200, 200));
                                                                        }
                                                                        ?></a>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <a href="<?php the_permalink(); ?>">
                                        <h4 class="cate_h12"><?php the_title(); ?></h4>
                                        <p class="cate_p1 pt-3">Potency: 15.8% <br> CBD / < 0.3 DELTA 9 THC</p>
                                                <div class="prod_rev_per">Last Updated On: <?php the_time('j F, Y'); ?></div>
                                                <?php
                                                $excr = wp_trim_words(get_the_excerpt(), 12);
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
                </section>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        <?php endif; ?>
    </div>
</div>
<!-- Related Posts end -->
<?php get_footer(); ?>