<?php get_header(); ?>

    <!-- 森カフェの画像を挿入する -->
    <div class="main-img">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/coffee-2319107_1280.jpg" alt="メイン写真">
    </div>

    <!-- メイン -->
    <main>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; else: ?>
        <?php endif; ?>
        <!-- コンセプト -->
        <section class="content-a">
            <div class="content-title">
                <h2>Concept</h2>
                <p class="text">テキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
        </section>

        <!-- メニュー -->
        <h2>Menu</h2>
        <section class="content-b">
        <div class="menu">
                    <div class="menu-box">
                    <?php $args = array(
                        'post_type' => 'post',
                        'category_name' => 'menu',
                        'posts_per_page' => 3,
                        );
                    $new_query = new WP_Query($args);
                    if($new_query->have_posts()): while($new_query->have_posts()): $new_query->the_post(); ?>
                    <!-- 表示させるコンテンツ -->
                    <dl>
                        <dt><time><?php echo get_the_date(); ?></time></dt>
                        <dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
                    </dl>
                    <!-- ここまでコンテンツ -->
                    <?php endwhile; wp_reset_postdata(); else: ?>
                        <p>お知らせはありません</p>
                    <?php endif; ?>
                    </div>
                    <div class="home-news-btn">
                        <a href="<?php echo esc_url(home_url('/news')); ?>">MORE</a>
                    </div>
                </div>
        </section>

       
        <!-- ニュース -->
        <section class="content-c">
            <div class="content-news">
                <h2>News</h2>
                <div class="news">
                    <div class="news-box">
                    <?php $args = array(
                        'post_type' => 'post',
                        'category_name' => 'news',
                        'posts_per_page' => 3,
                        );
                    $new_query = new WP_Query($args);
                    if($new_query->have_posts()): while($new_query->have_posts()): $new_query->the_post(); ?>
                    <!-- 表示させるコンテンツ -->
                    <dl>
                        <dt><time><?php echo get_the_date(); ?></time></dt>
                        <dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
                    </dl>
                    <!-- ここまでコンテンツ -->
                    <?php endwhile; wp_reset_postdata(); else: ?>
                        <p>お知らせはありません</p>
                    <?php endif; ?>
                    </div>
                    <div class="home-news-btn">
                        <a href="<?php echo esc_url(home_url('/news')); ?>">MORE</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>