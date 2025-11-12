<?php get_header(); ?>

<main>
    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>
            <article>
                <div>this is a pet, not a post</div>
                <h1><?php the_title(); ?></h1>
                <?php get_template_part('template-parts/post-meta'); ?>
                <div><?php the_content(); ?></div>
            </article>
        <?php endwhile; endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>