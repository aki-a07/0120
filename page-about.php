<?php get_header(); ?>

    <!-- メイン -->
    <main>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <!-- 森カフェの画像を挿入する -->
        <div class="main-visual">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/coffee-shop-7422653_1280.jpg" alt="森カフェの写真">
        </div>
        <h2>repos coffee</h2>
        <p class="text">テキストテキストテキストテキス<<br>トテキストテキストテキストテキスト</p>
        
<!-- コーヒーのこだわりについて -->
    <section class="about-coffee">
        <div class="coffee_content">
            <h3>Coffee</h3>
            <div class="flex-box">
                <p>テキストテキストテキストテキスト<br>テキストテキストテキストテキスト<br>テキストテキストテキストテキスト</p>
                <div class="img-coffee">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/janko-ferlic-h9Iq22JJlGk-unsplash.jpg" alt="コーヒー豆の写真">
            </div>
        </div>
    </div>
</section>

<!-- 本のこだわりについて -->
    <section class="about-book">
        <div class="book_content">
            <h3>Book</h3>
            <!-- 本の画像 -->
            <div class="flex-box">
                <div class="img-books">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/books-2596809_640.jpg" alt="本の写真">
                </div>
                <p>テキストテキストテキストテキスト<br>テキストテキストテキストテキスト<br>テキストテキストテキストテキスト</p>
            </div>
        </div>
    </section>
        <?php endwhile; else: ?>
        <?php endif; ?>
       
    </main>

<?php get_footer(); ?>