<?php get_header(); ?>
    <!-- メイン -->
    <main>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <?php endwhile; else: ?>
        <?php endif; ?>
       
    </main>

<?php get_footer(); ?>