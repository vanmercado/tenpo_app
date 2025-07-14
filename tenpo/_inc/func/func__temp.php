<?php
/*--------------------------------------------------------------
wp_head Setting (Include CSS/JS files + Add feed)
--------------------------------------------------------------*/
// Include CSS/JS files
function my_wp_head() {
    // CSS (in <head>)
    wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/_assets/js/lib/fancybox/jquery.fancybox.min.css', '', '3.5.7' );
    wp_enqueue_style( 'swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css', '', '4.4.2' );
    wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', '', '4.1.1' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/_assets/css/style.css', '', '1.0' );

    // JS (before </body>)
    wp_deregister_script('jquery'); // Don't include WP Default jquery files
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', '', '3.7.1', true );
    wp_enqueue_script( 'wow', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', '', '1.1.2', true );
    wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/_assets/js/lib/fancybox/jquery.fancybox.min.js', '', '3.5.7', true );
    wp_enqueue_script( 'swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js', '', '4.4.2', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/_assets/js/script.js', '', '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_wp_head' );

// Add feed
add_theme_support( 'automatic-feed-links' );


/*--------------------------------------------------------------
Check New date (for post)
--------------------------------------------------------------*/
function check_new_date( $setted_new_days ) {
    $entry_date = get_the_time('U');
    $now_date = date_i18n('U');  // now time
    $passed_days = date('U', ($now_date - $entry_date)) / 86400; // now - entry

    if ( $passed_days <= $setted_new_days ):
        return true; // new
    else:
        return false; // old
    endif;
}


/*--------------------------------------------------------------
Output <title>
--------------------------------------------------------------*/
function nendebcom_theme_slug_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'nendebcom_theme_slug_setup' );


// Title Separator
function change_title_separator( $sep ){
    $sep = ' | ';
    return $sep;
}
add_filter( 'document_title_separator', 'change_title_separator' );


/*--------------------------------------------------------------
Allow the use of shortcodes in the source tag
--------------------------------------------------------------*/

function my_wp_kses_allowed_html( $tags, $context ) {
	$tags['source']['srcset'] = true;
	return $tags;
}
add_filter( 'wp_kses_allowed_html', 'my_wp_kses_allowed_html', 10, 2 );


/*--------------------------------------------------------------
ショートコードにつく不必要なものを停止
参考url : https://sakuragraphica.jp/web_construction/web_wordpress/post-570/#ltpgt
--------------------------------------------------------------*/
function shortcode_empty_paragraph_fix($content) {
    $array = array (
        '<p>[' => '[',
        ']</p>' => ']',
        ']<br />' => ']'
    );

    $content = strtr($content, $array);
    return $content;
}
add_filter('the_content', 'shortcode_empty_paragraph_fix');


/*--------------------------------------------------------------
Path to uploads directory Function and Short code
--------------------------------------------------------------*/
function uploads_path() {
    $upload_dir = wp_upload_dir(); // https://domain.com/WordPress/wp-content/uploads/
    return $upload_dir['baseurl'];
}
add_shortcode('uploads_path', 'uploads_path'); // [uploads_path]

/*--------------------------------------------------------------
Function and shortcode to get the path to the theme
--------------------------------------------------------------*/
function theme_dir() {
    return get_template_directory_uri();
}
add_shortcode('theme_dir', 'theme_dir'); // [theme_dir]


/*--------------------------------------------------------------
Function and shortcode to get the path to the site
--------------------------------------------------------------*/
function shortcode_homeurl( $atts, $content = '' ) {
	return esc_url( home_url() ).$content;
}
add_shortcode( 'homeurl', 'shortcode_homeurl' );


/*--------------------------------------------------------------
Get first term of post
--------------------------------------------------------------*/
function get_first_term($taxonomy){
    global $post;
    if($terms = get_the_terms($post->ID,$taxonomy)){
        return array_pop($terms);
    }
}


/*--------------------------------------------------------------
特定の親ページと、その子ページにのみ条件
例）条件分岐で使う
sampleAの親子に条件を書きたいときに使用する
<?php if(is_page('sampleA') || is_parent_slug() === 'sampleA'){
    条件を書く
}
--------------------------------------------------------------*/
function is_parent_slug() {
    global $post;
    if ($post->post_parent) {
        $post_data = get_post($post->post_parent);
        return $post_data->post_name;
    }
}

/*--------------------------------------------------------------
日本語スラッグを自動的に英字スラッグに書き換える
--------------------------------------------------------------*/
function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
    if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
    $slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
    }
    return $slug;
    }
add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4 );


/*--------------------------------------------------------------
アーカイブでの表示件数
--------------------------------------------------------------*/
// function change_posts_per_page($query) {
//     if ( is_admin() || ! $query->is_main_query() )
//         return;
//     if ( $query->is_archive('news') ) { //カスタム投稿タイプを指定
//         $query->set( 'posts_per_page', '9' ); //表示件数を指定
//     }
// }
// add_action( 'pre_get_posts', 'change_posts_per_page' );


/*--------------------------------------------------------------
Slug → Object (Pages)
使い方わからず。。。
--------------------------------------------------------------*/
function pageInfo($slug, $info) {
    $pages = get_page_by_path($slug);
    return $pages->$info;
}


/*--------------------------------------------------------------
No Image Function
--------------------------------------------------------------*/
function noimage($url) {
    if ( $url == "" ):
        $url = get_template_directory_uri().'/_assets/images/_etc/noimage.jpg'; // No Image File
    endif;

    return $url;
}


/*-----------------------------------------------------------
Custom WP Page Navi's Pagination
function custom_wp_pagenavi($html) {
    $out = '';

    $out = str_replace("<div class='wp-pagenavi'>", "", $html);
    $out = str_replace("</div>", "", $out);
    return '<div class="u-pager__list">'.$out.'</div>';
}
// add_filter( 'wp_pagenavi', 'custom_wp_pagenavi' );
上記が古いバージョンのようです。
下記が公式から拾ってきたフィルターフック
------------------------------------------------------------*/
add_filter('wp_pagenavi_class_previouspostslink', 'theme_pagination_previouspostslink_class');
add_filter('wp_pagenavi_class_nextpostslink', 'theme_pagination_nextpostslink_class');
add_filter('wp_pagenavi_class_page', 'theme_pagination_page_class');

function theme_pagination_previouspostslink_class($class_name) {
  return 'pagination__control-link pagination__control-link--previous';
}

function theme_pagination_nextpostslink_class($class_name) {
  return 'pagination__control-link pagination__control-link--next';
}

function theme_pagination_page_class($class_name) {
  return 'pagination__current-page';
}


// More Concise Usage - 1 callback for all filters
add_filter('wp_pagenavi_class_previouspostslink', 'theme_pagination_class');
add_filter('wp_pagenavi_class_nextpostslink', 'theme_pagination_class');
add_filter('wp_pagenavi_class_page', 'theme_pagination_class');

function theme_pagination_class($class_name) {
  switch($class_name) {
    case 'previouspostslink':
      $class_name = 'pagination__control-link pagination__control-link--previous';
      break;
    case 'nextpostslink':
      $class_name = 'pagination__control-link pagination__control-link--next';
      break;
    case 'page':
      $class_name = 'pagination__current';
      break;
  }
  return $class_name;
}


/*--------------------------------------------------------------
Output Excerpt of Post title
--------------------------------------------------------------*/
function return_title( $content, $length ) {
    global $post;
    $text_length = $length;

    $content = strip_tags( $post->post_title );
    $content = strip_shortcodes( $content );
    if( mb_strlen( $content, "utf-8") > $text_length ):
        $title = mb_substr( $content, 0, $text_length, "utf-8" );
        return $title. '...';
    else:
        return $content;
    endif;
}


/*--------------------------------------------------------------
Output Excerpt of Post contents
使い方わからず。。。
--------------------------------------------------------------*/
function return_content( $content, $length ) {
    global $post;
    $text_length = $length;

    $content =  preg_replace( '/<!--more-->.+/is',"",$content ); // Remove contents after <more>
    $content =  strip_shortcodes( $content ); // Remove Short Code
    $content =  strip_tags( $content ); // Remove Tag
    $content =  str_replace( "&nbsp;", "", $content ); // Remove Space
    $content = strip_shortcodes( $content );
    if( mb_strlen( $content, "utf-8" ) > $text_length ):
        $title = mb_substr( $content, 0, $text_length, "utf-8" );
        return $title. '...';
    else:
        return $content;
    endif;
}



/*--------------------------------------------------------------
Remove auto generate <p> from Post the_content
--------------------------------------------------------------*/
add_filter('the_content', 'wpautop_filter', 9);
function wpautop_filter($content) {
    global $post;

    $arr_types = ['page', 'works_project'];
    $post_type = get_post_type( $post->ID );

    if ($post_type !== 'news'): // NEWS以外
        remove_filter('the_content', 'wpautop');
        remove_filter('the_excerpt', 'wpautop');
    endif;

    return $content;
}


/*--------------------------------------------------------------
Output Thumbnail
$size = 出力したいサムネイルの種類名
$num = 出力形式 '0'->url, '1'->width, '2'->height
--------------------------------------------------------------*/
function opt_thumb_data($size, $noimg, $num) {
    $thumbnail_id = get_post_thumbnail_id($post->ID);
    if ( $size == '' ):
        $size = 'full';
    endif;

    if ( $thumbnail_id ):
        $image = wp_get_attachment_image_src( $thumbnail_id, $size );
        if ( $num == '' ):
            echo $image[0];
        else:
            echo $image[num];
        endif;
    else:
        if ( $noimg == '' ):
            echo get_template_directory_uri() . '/_assets/images/_etc/noimage.jpg';
        else:
            echo get_template_directory_uri() . '/_assets/images/_etc/' . $noimg;
        endif;
    endif;
}


/*--------------------------------------------------------------
Output alt of thumbnail
--------------------------------------------------------------*/
function thumb_alt() {
    if ( has_post_thumbnail() ):
        return the_title();
    else:
        return 'noimage';
    endif;
}


/*--------------------------------------------------------------
Empty Keyword Search
--------------------------------------------------------------*/
function search_no_keywords() {
    if (isset($_GET['s']) && empty($_GET['s'])):
        include(TEMPLATEPATH . '/search.php');
        exit;
    endif;
}
add_action('template_redirect', 'search_no_keywords');


/*--------------------------------------------------------------
Remove unnecessary wp_head
--------------------------------------------------------------*/
remove_action('wp_head', 'feed_links_extra',3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'parent_post_rel_link');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');


/*--------------------------------------------------------------
Remove Emoji
--------------------------------------------------------------*/
remove_action('wp_head', 'print_emoji_detection_script',7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
remove_filter('the_content_feed', 'wp_staticize_emoji');
remove_filter('comment_text_rss', 'wp_staticize_emoji');
remove_filter('wp_mail', 'wp_staticize_emoji_for_email');


/*--------------------------------------------------------------
Redirect Author Page → Top Page (for Security)
--------------------------------------------------------------*/
function theme_slug_redirect_author_archive() {
    if (is_author() ) {
        wp_redirect( home_url());
        exit;
    }
}
add_action( 'template_redirect', 'theme_slug_redirect_author_archive' );


/*--------------------------------------------------------------
Hide Rest API Information (for Security)
--------------------------------------------------------------*/
function my_filter_rest_endpoints( $endpoints ) {
    if ( isset( $endpoints['/wp/v2/users'] ) ) {
        unset( $endpoints['/wp/v2/users'] );
    }
    if ( isset( $endpoints['/wp/v2/users/(?P[\d]+)'] ) ) {
        unset( $endpoints['/wp/v2/users/(?P[\d]+)'] );
    }
    return $endpoints;
}
add_filter( 'rest_endpoints', 'my_filter_rest_endpoints', 10, 1 );


/*--------------------------------------------------------------
現在のページとパスが一致すればcurrentクラスを出力
--------------------------------------------------------------*/
function the_current_page_class($path){
    global $post;
    if($page = get_page_by_path($path)){
        if($page->ID == $post->ID){
            echo 'is-current';
        }
    }
}
/*--------------------------------------------------------------
現在の投稿タイプと一致すればcurrentクラスを出力
--------------------------------------------------------------*/
function the_current_post_type_class($post_type){
    if(get_post_type() == $post_type){
        echo 'is-current';
    }
}



/*--------------------------------------------------------------
現在の投稿タイプと一致すればcurrentクラスを出力
--------------------------------------------------------------*/
// Disable CF7 auto paragraph wrapping
add_filter('wpcf7_autop_or_not', '__return_false');



?>


