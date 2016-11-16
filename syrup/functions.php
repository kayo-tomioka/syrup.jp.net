<?php
/* eye catch image */
add_theme_support('post-thumbnails');


//アイキャッチ画像の定義と切り抜き
add_action( 'after_setup_theme', 'baw_theme_setup' );
function baw_theme_setup() {
	add_image_size('news_thumbnail', 225, 225 ,true );
	add_image_size('top_thumbnail', 280, 280 ,true );
}


?>