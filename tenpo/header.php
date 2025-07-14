<?php
if ( is_home() || is_front_page() ):
    $ogType = 'website';
else:
    $ogType = 'article';
endif;

// logo tag
if ( is_home() ):
    $tag = 'h1';
else:
    $tag = 'p';
endif;

// Function to check if current page matches the given slug
function is_current_page($slug) {
    global $post;
    
    // For home page
    if ($slug === 'home' && (is_home() || is_front_page())) {
        return true;
    }
    
    // Get current URL path
    $current_url = $_SERVER['REQUEST_URI'];
    $current_path = trim(parse_url($current_url, PHP_URL_PATH), '/');
    
    // Debug: uncomment the next line to see what's being compared
    // echo "<!-- Debug: Current path: '$current_path', Checking: '$slug' -->";
    
    // Check if current URL contains the slug
    if (strpos($current_path, $slug) !== false) {
        return true;
    }
    
    // Check for WordPress pages
    if (is_page($slug)) {
        return true;
    }
    
    // Check for custom post types or archives
    if (is_post_type_archive($slug) || get_query_var('post_type') === $slug) {
        return true;
    }
    
    // Check post slug
    if (isset($post->post_name) && $post->post_name === $slug) {
        return true;
    }
    
    // Check if it's a singular post/page with matching slug
    if (is_singular() && get_post_field('post_name', get_post()) === $slug) {
        return true;
    }
    
    // Additional check for pagename query var
    if (get_query_var('pagename') === $slug || get_query_var('name') === $slug) {
        return true;
    }
    
    return false;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head prefix="og: http://ogp.me/ns#  <?php echo $ogType; ?>: http://ogp.me/ns/<?php echo $ogType; ?>#">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, user-scalable=1, initial-scale=1, viewport-fit=cover">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    
    
    <!-- wp_head START -->
    <?php wp_head(); ?>
    <!-- wp_head END -->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KRFGMJG');</script>
    <!-- End Google Tag Manager -->
</head>

<body class="<?php customBodyClass(); // set by func__body_class.php ?>">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KRFGMJG"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- //////////////////// HEADER START //////////////////// -->
    <header class="siteHeader" role="banner">
        <div class="siteHeader__inner">
            <<?php echo $tag; ?> class="siteHeader__logo">
                <a href="<?php echo home_url(); ?>" class="siteHeader__logoLink">
                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/common/logo.png" alt="店舗アプリ">
                </a>
            </<?php echo $tag; ?>>

            <!-- PC Global Navi Start -->
            <div class="siteHeader__content">
                 
                <nav class="siteHeader__gNav">
                    <ul class="siteHeader__gNavPageList">
                        <li class="siteHeader__gNavItem">
                            <a href="<?php echo home_url()?>/function" 
                               class="siteHeader__gNavLink <?php echo is_current_page('function') ? 'active' : ''; ?>">
                               機能一覧
                            </a>
                        </li>
                        <li class="siteHeader__gNavItem">
                            <a href="<?php echo home_url()?>/tips" 
                               class="siteHeader__gNavLink <?php echo is_current_page('tips') ? 'active' : ''; ?>">
                               アプリ活用のヒント
                            </a>
                        </li>
                        <li class="siteHeader__gNavItem">
                            <a href="<?php echo home_url()?>/voice" 
                               class="siteHeader__gNavLink <?php echo is_current_page('voice') ? 'active' : ''; ?>">
                               お客様の声
                            </a>
                        </li>
                        <li class="siteHeader__gNavItem">
                            <a href="<?php echo home_url()?>/case" 
                               class="siteHeader__gNavLink <?php echo is_current_page('case') ? 'active' : ''; ?>">
                               導入事例
                            </a>
                        </li>
                        <li class="siteHeader__gNavItem">
                            <a href="<?php echo home_url()?>/faq" 
                               class="siteHeader__gNavLink <?php echo is_current_page('faq') ? 'active' : ''; ?>">
                               よくある質問
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- PC Global Navi End -->

                <div class="siteHeader__bnr">
                    <a href="<?php echo home_url()?>/contact" class="siteHeader__bnr01 u-pcDb">お問い合わせ</a>
                    <a href="<?php echo home_url()?>/download" class="siteHeader__bnr02 u-pcDb">資料ダウンロード</a>
                </div>
            </div>
        </div>
        
        <div class="siteHeader__gNavSpWrap">
            <a href="#" class="siteHeader__bnr01 u-spDb"></a>
            <a href="javascript:void(0)" class="hamMenuBtn js-btn" data-btn="hamMenu" data-animation="class">
                <hr class="hamMenuBtn__border">
                <hr class="hamMenuBtn__border">
                <hr class="hamMenuBtn__border">
            </a>
        </div>
        
        <div class="siteHeader__innerSp">
            <nav class="siteHeader__gNavSp">
                <div class="siteHeader__gNavTitle">
                    サービス
                </div>
                <ul class="siteHeader__gNavPageList">
                    <li class="siteHeader__gNavItem">
                        <a href="<?php echo home_url()?>/function" 
                           class="siteHeader__gNavLink <?php echo is_current_page('function') ? 'active' : ''; ?>">
                           機能一覧
                        </a>
                    </li>
                    <li class="siteHeader__gNavItem">
                        <a href="<?php echo home_url()?>/tips" 
                           class="siteHeader__gNavLink <?php echo is_current_page('tips') ? 'active' : ''; ?>">
                           アプリ活用のヒント
                        </a>
                    </li>
                    <li class="siteHeader__gNavItem">
                        <a href="<?php echo home_url()?>/voice" 
                           class="siteHeader__gNavLink <?php echo is_current_page('voice') ? 'active' : ''; ?>">
                           お客様の声
                        </a>
                    </li>
                    <li class="siteHeader__gNavItem">
                        <a href="<?php echo home_url()?>/case" 
                           class="siteHeader__gNavLink <?php echo is_current_page('case') ? 'active' : ''; ?>">
                           導入事例
                        </a>
                    </li>
                    <li class="siteHeader__gNavItem">
                        <a href="<?php echo home_url()?>/faq" 
                           class="siteHeader__gNavLink <?php echo is_current_page('faq') ? 'active' : ''; ?>">
                           よくある質問
                        </a>
                    </li>
                </ul>
                <div class="siteHeader__gNavTitle">
                    会社情報
                </div>
                <ul class="siteHeader__gNavPageList">
                    <li class="siteHeader__gNavItem">
                        <a href="<?php echo home_url()?>" 
                           class="siteHeader__gNavLink <?php echo is_current_page('home') ? 'active' : ''; ?>">
                           会社概要
                        </a>
                    </li>
                </ul>
                <div class="siteHeader__gNavLowerList">
                    <a href="<?php echo home_url()?>/contact" class="btnOrange secKv__btnItem">お問い合わせ</a>
                    <a href="<?php echo home_url()?>/download" class="btnOrange02 secKv__btnItem">資料ダウンロード</a>
                </div>
            </nav>
        </div>
    </header>
    <!-- //////////////////// HEADER END //////////////////// -->

    <!-- //////////////////// CONTENT START //////////////////// -->
    <main class="siteContent">