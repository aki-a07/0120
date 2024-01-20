<?php get_header(); ?>

    <!-- 森カフェの画像を挿入する -->
    <div class="main-img">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/coffee-2319107_1280.jpg" alt="メイン写真">
    </div>

    <!-- メイン -->
    <main>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <?php endwhile; else: ?>
        <?php endif; ?>
       
    </main>

<?php get_footer(); ?>