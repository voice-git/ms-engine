<?php

function my_setup() {
    add_theme_support( 'post-thumbnails' );
    //add_theme_support( 'title-tag' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
}
add_action( 'after_setup_theme', 'my_setup' );

function save_default_thumbnail( $post_id ) {
    $post_thumbnail = get_post_meta( $post_id, $key = '_thumbnail_id', $single = true );
    if ( !wp_is_post_revision( $post_id ) ) {
      if ( empty( $post_thumbnail ) ) {
        update_post_meta( $post_id, $meta_key = '_thumbnail_id', $meta_value = '480' );
      }
    }
  }
  add_action( 'save_post', 'save_default_thumbnail' );

  function my_script_init() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/scss/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'slicktheme-style', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), '1.0.0', 'all');
    /*wp_enqueue_script( 'index-js', get_template_directory_uri() . '/assets/js/index.js', array(), '1.0.0', 'all');
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '1.0.0', 'all');*/
    }
add_action( 'wp_enqueue_scripts', 'my_script_init' );

function my_redirect($redirect_url){
	if(is_singular(‘blog’)){$redirect_url = false;}
	else{return $redirect_url;}
}
add_filter('redirect_canonical','my_redirect');

global $NO_IMAGE_URL;

$NO_IMAGE_URL= '/image/noimg.png';


function max_excerpt_length( $string, $maxLength) {
    $length = mb_strlen($string, 'UTF-8');
    if($length < $maxLength){
      return $string;
    } else {
      $string = mb_substr( $string , 0 , $maxLength, 'utf-8' );
      return $string.'...';
    }
  }


  function add_custom_post_type(){
    register_post_type(
        'self',
        array(
            'label' => 'セルフサービス',
            'public'        => true,
            'has_archive'   => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'revisions',
            )
        )
    );
    register_post_type(
        'full',
        array(
            'label' => 'フルサービス',
            'public'        => true,
            'has_archive'   => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'revisions',
            )
        )
    );
    register_post_type(
        'shitujisan',
        array(
            'label' => '執事さんのおしごと記録',
            'public'        => true,
            'has_archive'   => true,
            'show_in_rest' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'revisions',
            )
        )
    );
    register_post_type(
        'sale',
        array(
            'label' => '自動車一覧',
            'public'        => true,
            'has_archive'   => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'revisions',
            )
        )
    );
}
add_action('init', 'add_custom_post_type');

function add_custom_taxonomy(){
    register_taxonomy(
        'self-cat',
        'self',
        array(
            'label' => 'カテゴリー',
            'hierarchical' => true,
            'public' => true,
        )
    );
    register_taxonomy(
        'full-cat',
        'full',
        array(
            'label' => 'カテゴリー',
            'hierarchical' => true,
            'public' => true,
        )
    );
    register_taxonomy(
        'shitujisan-cat',
        'shitujisan',
        array(
            'label' => 'カテゴリー',
            'hierarchical' => true,
            'public' => true,
            'show_in_rest' => true,
        )
    );
    register_taxonomy(
        'sale-cat',
        'sale',
        array(
            'label' => 'カテゴリー',
            'hierarchical' => true,
            'public' => true,
        )
    );
}
add_action('init', 'add_custom_taxonomy');


function pagenation($pages = '', $range = 3){
    $showitems = ($range * 1)+1;
    global $paged;
    if(empty($paged)) $paged = 1;
    if($pages == ''){
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages){
            $pages = 1;
        }
    }
    if(1 != $pages){
        // 画像を使う時用に、テーマのパスを取得
        $img_pass = get_template_directory_uri();
        echo "<div class=\"m-pagenation\">";
        // 「1/2」表示 現在のページ数 / 総ページ数
        // echo "<div class=\"m-pagenation__result\">". $paged."/". $pages."</div>";
        // 「前へ」を表示
        // if($paged > 1) echo "<div class=\"m-pagenation__prev\"><a href='".get_pagenum_link($paged - 1)."'>前へ</a></div>";
        // ページ番号を出力
        echo "<ol class=\"m-pagenation__body\">\n";
        for ($i=1; $i <= $pages; $i++){
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
                echo ($paged == $i)? "<li class=\"-current\">".$i."</li>": // 現在のページの数字はリンク無し
                    "<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
            }
        }
        // [...] 表示
        if(($paged + 4 ) < $pages){
            echo "<li class=\"notNumbering\">...</li>";
            echo "<li><a href='".get_pagenum_link($pages)."'>".$pages."</a></li>";
        }
        echo "</ol>\n";
        // 「次へ」を表示
        // if($paged < $pages) echo "<div class=\"m-pagenation__next\"><a href='".get_pagenum_link($paged + 1)."'>次へ</a></div>";
        echo "</div>\n";
    }
}

remove_filter('the_excerpt', 'wpautop');

//reCAPTCHA
function load_recaptcha_js(){
 if (!(is_page(array("contact","confirm","confirm2","confirm3","confirm4")))){
  wp_deregister_script( 'google-recaptcha' );
 }
}
add_action( 'wp_enqueue_scripts', 'load_recaptcha_js',100 );