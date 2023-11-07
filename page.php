<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="article-full">
            <header>
                <h1 class="d-flex justify-content-center"><?php the_title(); ?></h1>
            </header>
            <?php the_content(); ?>
        </article>
        
        <!--Section: Contact v.2-->
    <?php endwhile;
else : ?>
    <article>
        <p>Sorry, no page was found!</p>
    </article>
<?php endif; ?>
<?php get_footer(); ?>