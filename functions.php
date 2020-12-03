<?php
// win: Alt + ↑↓で移動できる
function sakura_theme_setup() {
    add_theme_support('post-thumbnails');
    add_image_size( 'category-thumb', 300, 9999 ); // 横 300px (縦 制限なし)
    register_nav_menus( array( //複数のナビゲーションメニューを登録する関数
        //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
          'main-menu' => 'ドロワー内部',
          'footer-menu'  => 'Footer Menu',
    ) );
}
add_action('after_setup_theme', 'sakura_theme_setup');

/* 投稿アーカイブを有効にしてスラッグを指定する */
function post_has_archive( $args, $post_type ) {

    if ( 'post' == $post_type ) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'news'; // スラッグ名
    }
    return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

function sakura_theme_link() {
    // 決まりではないけどレスポンシブの一つの手段として...
    // wp_is_mobile() でモバイルかの判別ができる
    // if(wp_is_mobile()) {
    //     wp_enqueue_style('sp-css', get_template_directory_uri() . '/css/style_sp.css');
    // }else{
    //     wp_enqueue_style('pc-css', get_template_directory_uri() . '/css/style_pc.css');
    // }
    wp_enqueue_style('drawer-css', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css');
    wp_enqueue_style('common-css', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('sp-css', get_template_directory_uri() . '/css/style_sp.css', array(), '5', 'screen and ( max-width:768px )');
    wp_enqueue_style('pc-css', get_template_directory_uri() . '/css/style_pc.css', array(), '5', 'screen and ( min-width:768px )');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
    wp_enqueue_script('iscroll', 'https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js');
    wp_enqueue_script('drawer-js', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js');
    wp_enqueue_script('fadethis', get_template_directory_uri() . '/js/jquery.fadethis.min.js');
    wp_enqueue_script('common-js', get_template_directory_uri() . '/js/common.js');

}
add_action('wp_enqueue_scripts', 'sakura_theme_link');


function sakura_theme_init(){
    register_post_type(
        'daily', [
            "labels" => [
                "name" => "日報"
            ],
            "public" => true,
            // アイコンの設定
            'menu_icon' => 'dashicons-book-alt',
            // 表示順の設定 投稿が５
            'menu_position' => 3,
            // 新エディタに変えるコード
            'show_in_rest' => true,
            // 参照 https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_post_type
            // アーカイブページでの取得
            'has_archive' => true,
            // 階層構造の取得
            'hierarchical' => true,
    ]);
}
add_action('init', 'sakura_theme_init');