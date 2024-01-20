<?php get_header(); ?>
<!-- メイン -->
<main>
<!-- ループの基本形の文章です -->
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
<!-- コンテンツのHTMLやPHPを書く -->
<?php endwhile; else: ?>
<!-- コンテンツがないときのHTMLやPHPを書く -->
<?php endif; ?>
</main>

<?php get_footer(); 