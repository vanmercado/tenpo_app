<?php
/*====================================================================
Top Page (Default)
====================================================================*/
$description = 'このサイトはWPのテンプレートを作成するためのテスト用サイトです。';
$keywords = 'Wordpress,テンプレート,カスタマイズ,ワードプレス,WP';
$ogTitle = wp_title('｜', false, 'right') . get_bloginfo();
$ogDescription = 'このサイトはWPのテンプレートを作成するためのテスト用サイトです。';
$ogUrl = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$ogImg = get_template_directory_uri().'/_assets/images/_etc/og.jpg';

$tw_ac = ''; // Twitter Account

$parentTtl = get_the_title($post->post_parent); // Parent Page Info


/*====================================================================
Fixed Page
====================================================================*/
if ( is_page() ):
    $get_posC = strip_tags($post->post_content);
    if ( $get_posC ):
        $rep_posC = str_replace(["\r\n", "\r", "\n"], '', $get_posC);
        $description = str_replace("&nbsp;", '', $rep_posC);
        $description = mb_substr($description, 0, 132);
    endif;

    if ( is_page('sample-page') ):
        $description = 'サンプルページの出力テストをします。';
        $keywords = 'Wordpress,サンプルページ';
        $ogTitle = 'サンプルページ';
        $ogDescription = 'サンプルページの出力テストをします。';
    endif;
endif;


/*====================================================================
Archive Page
====================================================================*/
if ( is_archive() ):
    $description = 'アーカイブページです。様々な一覧ページに使われます。';
    $keywords = 'Wordpress,アーカイブページ';
    // $ogTitle = 'アーカイブページ';
    $ogDescription = 'アーカイブページです。様々な一覧ページに使われます。';
    // $ogImg = get_template_directory_uri() . '/_assets/images/_etc/og.jpg';

    if ( is_tax() ):
        $taxonomy = get_query_var('taxonomy');
        $term = get_term_by('slug', $term, $taxonomy);

        $description = 'タクソノミーページです。様々な一覧ページに使われます。';
        $keywords .= ',タクソノミーページ,' . $term->name; // デフォルトキーワードを入れたくない場合は'.='の'.'を外す
        // $ogTitle = 'タクソノミーページ';
        $ogDescription = 'タクソノミーページです。様々な一覧ページに使われます。';
        // $ogImg = get_template_directory_uri() . '/_assets/images/_etc/og.jpg';
    endif;

    if ( is_date() ):
        $year = get_query_var('year');
        $month = get_query_var('monthnum');
        $day = get_query_var('day');

        if ( is_year() ):
            $keywords .= ',' . $year;
        endif;
        if ( is_month() ):
            $keywords .= ',' . $year . '/' . $month;
        endif;
        if ( is_day() ):
            $keywords .= ',' . $year . '/' . $month . '/' . $day;
        endif;
    endif;
endif;


/*====================================================================
Single Page
====================================================================*/
if ( is_single() ):
    // キーワード
    $taxonomy_names = get_post_taxonomies();
    if ( $taxonomy_names ):
        foreach ($taxonomy_names as $key):
            $terms = get_the_terms($post->ID, $key);

            if ( $terms ):
                foreach ( $terms as $key ):
                    $keywords .=  ',' . $key->name; // デフォルトキーワードを入れたくない場合は'.='の'.'を外す
                endforeach;
            endif;
        endforeach;
    endif;

    $get_posC = strip_tags($post->post_content);
    if ( $get_posC ):
        $rep_posC = str_replace("\r\n", '', $get_posC);
        $description = str_replace("&nbsp;", '', $rep_posC);
        $description = mb_substr($description, 0, 132);
    endif;

    $ogDescription = $description;
endif;



/*====================================================================
OG Image Setting
====================================================================*/
if ( is_single() || is_page() ):
    // og画像
    if ( has_post_thumbnail() ):
        $thumbnail_id = get_post_thumbnail_id($post->ID);
        $size = '1200_630';
        $image = wp_get_attachment_image_src( $thumbnail_id, $size );
        $width = $image[1]; // width
        $height = $image[2]; // height
        $imgUrl = $image[0]; // height
        if ( $width == '1200' && $height == '630' ):
            $ogImg = $imgUrl;
        else:
            $thumbnail_id = get_post_thumbnail_id($post->ID);
            $size = '600_315';
            $image = wp_get_attachment_image_src( $thumbnail_id, $size );
            $width = $image[1]; // width
            $height = $image[2]; // height
            $imgUrl = $image[0]; // height
            if ( $width == '600' && $height == '315' ):
                $ogImg = $imgUrl;
            else:
                $thumbnail_id = get_post_thumbnail_id($post->ID);
                $size = '300_157';
                $image = wp_get_attachment_image_src( $thumbnail_id, $size );
                $width = $image[1]; // width
                $height = $image[2]; // height
                $imgUrl = $image[0]; // height
                if ( $width == '300' && $height == '157' ):
                    $ogImg = $imgUrl;
                else:
                    $ogImg = get_the_post_thumbnail_url();
                endif;
            endif;
        endif;
    endif;
endif;


?>

<meta name="keywords" content="<?php echo $keywords; ?>">
<meta name="description" content="<?php echo $description; ?>">
<meta property="og:title" content="<?php echo $ogTitle; ?>">
<meta property="og:type" content="<?php echo $ogType; ?>">
<meta property="og:description" content="<?php echo $ogDescription; ?>">
<meta property="og:url" content="<?php echo $ogUrl; ?>">
<meta property="og:image" content="<?php echo $ogImg; ?>">
<meta name="twitter:card" content="summary_large_image">
<?php if ( !$tw_ac == '' ) : ?>
    <meta name="twitter:site" content="@<?php echo $tw_ac; ?>">
<?php endif ; ?>
<!-- <meta name="twitter:creator" content="@user"> -->
<meta name="twitter:image:src" content="<?php echo $ogImg; ?>">
<meta name="twitter:domain" content="<?php echo home_url(); ?>">
