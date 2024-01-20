
<!-- フッター -->
<footer id="footer">
        <div class="container">
            <h1>repos coffee</h1>
            <div class="repos-img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.jpg" alt="コーヒー画像">
            </div>
            <?php $args =array(//まず変数$argsを作ってarray()の中にデータを入れる。
                    'theme_location' => 'footer_nav',// functions.phpで設定したメニューの名前を設定 //
                );
                wp_nav_menu($args);//メニューを表示
            ?>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>