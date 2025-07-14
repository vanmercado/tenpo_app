<?php
/*--------------------------------------------------------------
Hide WP Admin Tool bar
--------------------------------------------------------------*/
// show_admin_bar( false );


/*--------------------------------------------------------------
ACF Pro Option Page
オプションページ
--------------------------------------------------------------*/
// if( function_exists('acf_add_options_page') ) {
//     $option_page = acf_add_options_page(
//         [
//         'page_title' => 'Option Page', // Page Title
//         'menu_title' => 'Option Page', // Menu Title
//         'menu_slug' => 'option_page', // Slug
//         'capability' => 'edit_posts',
//         'redirect' => false,
//         ]
//     );
// }


/*******************************
ACF Pro Option Page
オプションページ　複数＋親子関係持たせる場合
******************************/
// if( function_exists('acf_add_options_page') ) {

//     acf_add_options_page(array(
//         'page_title'    => 'OptionPage A',
//         'menu_title'    => 'OptionPage A',
//         'menu_slug'     => 'options_a',
//         'capability'    => 'edit_posts',
//         'parent_slug'   => '',
//         'position'  => false,
//         // 'redirect'  => false,
//     ));
//     acf_add_options_sub_page(array( //サブページ
//         'page_title' => 'OptionPage A child',
//         'menu_title' => 'OptionPage A child',
//         'menu_slug' => 'options_a_child',
//         'capability' => 'edit_posts',
//         'redirect' => false,
//         'parent_slug'   => 'options_a', //親ページのスラッグ
//     ));

//     acf_add_options_page(array(
//         'page_title'    => 'OptionPage B',
//         'menu_title'    => 'OptionPage B',
//         'menu_slug'     => 'options_b',
//         'capability'    => 'edit_posts',
//         'parent_slug'   => '',
//         'position'  => false,
//         // 'redirect'  => false,
//     ));
//     acf_add_options_sub_page(array( //サブページ
//         'page_title' => 'OptionPage B _child',
//         'menu_title' => 'OptionPage B child',
//         'menu_slug' => 'options_b_child',
//         'capability' => 'edit_posts',
//         'redirect' => false,
//         'parent_slug'   => 'options_b', //親ページのスラッグ
//     ));
// }

/*--------------------------------------------------------------
Customize WP Log-in Page
--------------------------------------------------------------*/
function custom_login() { ?>
    <style>
    body.login {
        background: url('<?php echo get_template_directory_uri(); ?>/_assets/images/_etc/loginPage_bg.jpg') no-repeat center / cover;
    }

    .login h1 a {
        border-radius: 100%;
        background: #fff url('../images/wordpress-logo.svg?ver=20131107') no-repeat center / cover;
    }

    .login #backtoblog a,
    .login #nav a {
        text-shadow: 1px 1px 1px rgba(255, 255, 255, 0.5);
    }

    #login {
        padding-top: 10%;
    }

    .login .button-primary {
        background: #005ac8 !important;
        border-color: #005ac8 !important;
        box-shadow: 0 1px 1px 1px rgba(0, 0, 0, 0.2);
        font-size: 14px;
        letter-spacing: 0.05em;
        text-shadow: none;
    }

    .login input[type=text]:focus,
    .login input[type=search]:focus,
    .login input[type=radio]:focus,
    .login input[type=tel]:focus,
    .login input[type=time]:focus,
    .login input[type=url]:focus,
    .login input[type=week]:focus,
    .login input[type=password]:focus,
    .login input[type=checkbox]:focus,
    .login input[type=color]:focus,
    .login input[type=date]:focus,
    .login input[type=datetime]:focus,
    .login input[type=datetime-local]:focus,
    .login input[type=email]:focus,
    .login input[type=month]:focus,
    .login input[type=number]:focus,
    .login select:focus,
    .login textarea:focus {
        border-color: #005ac8 !important;
        box-shadow: none !important;
    }

    .login input[type=checkbox]:checked:before {
        color: #005ac8 !important;
    }
</style>
<script>
// add script here
</script>
<?php }
add_action( 'login_enqueue_scripts', 'custom_login' );


/*--------------------------------------------------------------
Set Eyecatch Image's size
--------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );

// OG Image
add_image_size( '1200_630', 1200, 630, true); // w: 1200px, h: 630px
add_image_size( '600_315', 600, 315, true); // w: 600px, h: 315px
add_image_size( '300_157', 300, 157, true); // w: 300px, h: 157px


/*--------------------------------------------------------------
Hide Visual Editor on Fixed Pages
--------------------------------------------------------------*/
function disable_visual_editor_in_page(){
    global $typenow;
    if( $typenow == 'page' ){
        add_filter('user_can_richedit', 'disable_visual_editor_filter');
    }
}
function disable_visual_editor_filter(){
    return false;
}
// add_action( 'load-post.php', 'disable_visual_editor_in_page' );
// add_action( 'load-post-new.php', 'disable_visual_editor_in_page' );


/*-----------------------------------------------------------
Remove WP default favicon (for WP ver5.4~)
------------------------------------------------------------*/
function wp_favicon_remover() {
    exit;
}
add_action( 'do_faviconico', 'wp_favicon_remover');


/*--------------------------------------------------------------
Set favicon on WP Admin Page
--------------------------------------------------------------*/
function admin_favicon() {
    echo '<link rel="icon" type="image/x-icon" href="'.get_template_directory_uri().'/_assets/images/_etc/favicon.ico">';
}
add_action('admin_head', 'admin_favicon');


/*--------------------------------------------------------------
Display CPT post count on the Dash Board
--------------------------------------------------------------*/
function my_dashboard_glance_items( $elements ) {
    $args = [
        'public' => true,
        '_builtin' => false
    ];
    $post_types = get_post_types( $args );
    foreach ( $post_types as $post_type ):
        $num_posts = wp_count_posts( $post_type );
        if ( $num_posts && $num_posts->publish ):
            $text = number_format_i18n( $num_posts->publish ).' 件';
            $postTypeLabel = get_post_type_object( $post_type )->label;
            $elements[] = sprintf( '<a href="edit.php?post_type=%1$s" class="%1$s-count"><b>%3$s</b>：%2$s</a>', $post_type, $text, $postTypeLabel );
        endif;
    endforeach;
    return $elements;
}
add_filter( 'dashboard_glance_items', 'my_dashboard_glance_items' );

// Display CPT post count on the Dash Board (Icon)
function my_dashboard_print_styles() {
    $args = [
        'public' => true,
        '_builtin' => false
    ];
    $post_types = get_post_types( $args );
    $br = "\n";
    echo '<style>' . $br;
    foreach ( $post_types as $post_type ):
        echo '#dashboard_right_now .' . get_post_type_object( $post_type )->name . '-count:before { content: "\f109"; }' . $br;
    endforeach;
    echo '</style>'.PHP_EOL;
}
add_action( 'admin_print_styles', 'my_dashboard_print_styles' );

/*--------------------------------------------------------------
Add Font-family on tinyMCE
--------------------------------------------------------------*/
add_filter('tiny_mce_before_init', function($settings){
    $settings['font_formats'] =
    "Noto Sans JP='Noto Sans JP', sans-serif;".
    "Noto Serif JP='Noto Serif JP', sans-serif;".
    "游明朝='游明朝','Yu Mincho';".
    "游ゴシック='游ゴシック','Yu Gothic';".
    "Impact='Impact';".
    "Verdana='Verdana';".
    "Georgia='Georgia','ヒラギノ角ゴ Pro W3','Hiragino Kaku Gothic Pro','メイリオ',Meiryo,'ＭＳ Ｐゴシック','MS PGothic';".
    "Times New Roman='Times New Roman';".
    "Courier New='Courier New';".
    "Comic Sans MS='Comic Sans MS';"
    ;
    return $settings;
});

/*--------------------------------------------------------------
Hide item from Menu
--------------------------------------------------------------*/
function remove_menus () {
    global $menu;
    global $submenu;
    // unset($menu[5]);  // Default Post
    // unset($menu[25]); // Comment
    // unset($submenu['index.php'][10]); // Dash Board - Update
    // unset($submenu['themes.php'][6]); // Appearance - Customize
    // unset($submenu['plugins.php'][15]); // Plugins - Edit Plugins
    // unset($submenu['tools.php'][5]); // Tools - Useful Tools
    // unset($submenu['tools.php'][10]); // Tools - Import
    // unset($submenu['tools.php'][15]); // Tools - Export
    // unset($submenu['options-general.php'][15]); // Setting - Post Setting
    // unset($submenu['options-general.php'][30]); // Setting - Post Setting
}
// add_action('admin_menu', 'remove_menus');


// Hide Welcome Panel
function my_admin_css_index() { ?>
    <style>
    #welcome-panel {
        display: none !important;
    }
</style>
<?php
}
// add_action("admin_print_styles-index.php", 'my_admin_css_index');


// Hide Notification of WP version update
// add_filter( 'pre_site_transient_update_core', create_function( '$a', "return null;" ) );


// Hide Notification of Plugins update
// remove_action( 'load-update-core.php', 'wp_update_plugins' );
// add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );


// Hide Notification of WP Theme update
// remove_action( 'load-update-core.php', 'wp_update_themes' );
// add_filter( 'pre_site_tr ansient_update_themes', create_function( '$a', "return null;" ) );


/*--------------------------------------------------------------
CPT WP Revisions Control
投稿タイプで、リビジョンコントロールを有効化できます。
posttypeの部分をrenameしてください。
--------------------------------------------------------------*/
// function my_custom_revision() {
//     add_post_type_support( 'posttype', 'revisions' );
// }
// add_action('init', 'my_custom_revision');

?>
