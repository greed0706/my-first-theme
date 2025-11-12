<?php get_header(); ?>

<main>
  <h1>Bài viết mới nhất</h1>
  <?php if (have_posts()):
    while (have_posts()):
      the_post(); ?>
      <article>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php get_template_part('template-parts/post-meta'); ?>
        <div><?php the_excerpt(); ?></div>
      </article>
    <?php endwhile; else: ?>
    <p>Không có bài viết nào.</p>
  <?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>