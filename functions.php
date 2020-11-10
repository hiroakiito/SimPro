<?php
// カスタムロゴを使用する
add_theme_support('custom-logo');
// cssとJs読み込みの反映
function my_styles() {
	wp_enqueue_style( 'app', get_template_directory_uri() . '/css/app.css', array(), '1.0.3' );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/main.js', array( 'jquery' ), '1.0.2', true );
}
add_action( 'wp_enqueue_scripts', 'my_styles' );
// ナビゲーションメニューの有効化
function register_my_menus() { 
  register_nav_menus( array( //複数のナビゲーションメニューを登録する関数
  //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
    'header-navigation' => 'Header Navigation',
    'footer-menu'  => 'Footer Menu',
  ) );
}
add_action( 'after_setup_theme', 'register_my_menus' );