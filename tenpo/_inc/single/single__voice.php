<?php
$id = get_the_ID();
$title = get_the_title();
$grp = get_field('voice_grp');
$voicePostTerms_objArray = get_the_terms(get_the_ID(), 'voice_cat');
?>
<section class="secBox">
    <div class="secBox__inner">
        <div class="secTestimonial">
            <div class="secTestimonial__inner">
                <div class="secTestimonial__content">
                    <div class="secTestimonial__title">
                        <h1 class="secTestimonial__titleName"><?php echo $title; ?></h1>
                        <span class="secTestimonial__titleSuffix">様</span>
                    </div>
                    <?php if (get_field('voice_desc') != ''): ?>
                        <p class="secTestimonial__text">
                            <?php echo get_field('voice_desc'); ?>
                        </p>
                    <?php endif; ?>
                    <?php 
                    if ($voicePostTerms_objArray && !is_wp_error($voicePostTerms_objArray)): ?>
                        <div class="secTestimonial__tagWrapper">
                            <?php foreach ($voicePostTerms_objArray as $term): ?>
                                <span class="secTestimonial__tag"><?php echo esc_html($term->name); ?></span>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                    <?php if (has_post_thumbnail()): ?>
                <div class="secTestimonial__imageWrap">
                        <?php
                        $thumb_id = get_post_thumbnail_id(get_the_ID());

                        $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);

                        $thumb_src = wp_get_attachment_image_src($thumb_id, 'full');
                        $src = $thumb_src[0]; ?>
                        <?php echo '<img src="' . esc_url($src) . '" alt="' . esc_attr($alt) . '" class="secTestimonial__image">'; ?>

                </div>
                    <?php endif; ?>
            </div>
        </div>
        <div class="secCaseDetail">
            <div class="secCaseDetail__inner">
                <div class="secCaseDetail__body">
                    <h2 class="secCaseDetail__bodyHeading">導入店舗</h2>
                    <?php 
                    $lower_heading = get_field('voice_lowerheading');
                    if ($lower_heading): ?>
                        <h3 class="secCaseDetail__bodyCaseTitle">
                            <?php echo esc_html($lower_heading); ?>
                        </h3>
                    <?php endif; ?>
                    <?php if (have_rows('voice_table')): ?>
                    <div class="secCaseDetail__bodyToc">
                        <div class="secCaseDetail__bodyTocHd">
                            <div class="secCaseDetail__bodyTocLabel">目次</div>
                            <button class="secCaseDetail__bodyTocToggle js-tocToggle" aria-expanded="false"
                                aria-controls="tocContent">
                                表示する
                            </button>
                        </div>
                        <div class="secCaseDetail__bodyTocContent" id="tocContent">
                            <?php while (have_rows('voice_table')):
                                the_row(); ?>
                                <?php $parentTtl = get_sub_field('heading'); ?>
                                <a href="#<?php echo $parentTtl; ?>"
                                    class="secCaseDetail__bodyTocContentMain"><?php echo $parentTtl; ?></a>
                                <?php if (have_rows('subcontent')): ?>
                                    <?php while (have_rows('subcontent')):
                                        the_row(); ?>
                                        <?php $childTtl = get_sub_field('header'); ?>
                                        <?php if ($childTtl != ''): ?>
                                            <div class="secCaseDetail__bodyTocContentMainCont">
                                                <a href="#<?php echo $childTtl; ?>"
                                                    class="secCaseDetail__bodyTocContentSub"><?php echo $childTtl; ?></a>
                                            </div>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="secCaseDetail__bodyCont">
                        <?php 
                        the_content(); 
                        ?>
                    </div>
                </div>

                <div class="secCaseDetail__sidebar">
                    <?php
                    $sidebarQuery = [
                        'post_type' => 'voice',
                        'posts_per_page' => 3,
                        'post__not_in' => [$id],
                    ];
                    $sidebarPost = new WP_Query($sidebarQuery);
                    if ($sidebarPost->have_posts()): ?>
                        <div class="secCaseDetail__sidebarItem">
                            <span class="secCaseDetail__sidebarItemHd">他の記事を見る</span>
                            <div class="secCaseDetail__articleList">
                                <?php while ($sidebarPost->have_posts()):
                                    $sidebarPost->the_post(); ?>
                                    <a href="<?php echo get_the_permalink(); ?>" class="secCaseDetail__articleItem">
                                        <div class="secCaseDetail__articleContent">
                                            <h3 class="secCaseDetail__articleTitle"><?php echo get_the_title(); ?><span
                                                    class="secCaseDetail__articleTitleSpan">様</span></h3>
                                            <?php if (get_field('voice_desc') != ''): ?>
                                                <p class="secCaseDetail__summary"><?php echo get_field('voice_desc'); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="secCaseDetail__articleImage">
                                            <?php if (has_post_thumbnail()): ?>
                                                <?php
                                                $thumb_id = get_post_thumbnail_id(get_the_ID());

                                                
                                                $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);

                                                
                                                $thumb_src = wp_get_attachment_image_src($thumb_id, 'full'); 
                                                $src = $thumb_src[0]; ?>
                                                <?php echo '<img src="' . esc_url($src) . '" alt="' . esc_attr($alt) . '" class="secCaseDetail__articleImageItem">'; ?>

                                            <?php endif; ?>
                                        </div>
                                    </a>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="secCaseDetail__sidebarItem">
                        <span class="secCaseDetail__sidebarItemHd">フリーワードで検索する</span>
                        <form action="<?php echo home_url('/voice/'); ?>" method="get"
                            class="secCaseDetail__searchForm">
                            <div class="secCaseDetail__searchBox">
                                <input type="text" name="query" placeholder="キーワードで探す"
                                    class="secCaseDetail__searchBoxInput" />
                                <input type="submit" class="secCaseDetail__searchBoxBtn" value=" ">
                            </div>
                        </form>
                    </div>
                    <?php
                    $terms = get_terms(array(
                        'taxonomy' => 'voice_cat',
                        'hide_empty' => false,
                    ));
                    ?>
                    <?php if ($terms): ?>
                        <div class="secCaseDetail__sidebarItem">
                            <span class="secCaseDetail__sidebarItemHd">タグから検索する</span>
                            <div class="secCaseDetail__tagList">
                                <?php foreach ($terms as $cat): ?>
                                    <a href="<?php echo get_term_link($cat); ?>"
                                        class="secCaseDetail__tagItem"><?php echo esc_html($cat->name); ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php if ($grp): ?>
            <div class="secApp">
                <div class="secApp__container">
                    <?php foreach ($grp['img'] as $img): ?>
                        <div class="secApp__image">
                            <img src="<?php echo $img['file']['url']; ?>" alt="<?php echo $img['file']['alt']; ?>" class="secApp__imageItem" />
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php if($grp['qr']['url'] != ''): ?>
                <div class="secApp__container">
                    <div class="secApp__qrContainer">
                        <p class="secApp__qrHeading">ダウンロードはこちら</p>
                        <img src="<?php echo $grp['qr']['url']; ?>" alt="<?php echo $grp['qr']['alt']; ?>" class="secApp__qrCode">
                        <?php endif; ?>
                        <div class="secApp__extLinkWrap">
                            <?php if($grp['url_ios'] != ''): ?>
                            <a href="<?php echo $grp['url_ios']; ?>" target="_blank" class="secApp__extLink">
                                <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/common/appStore.png"
                                    alt="App Store" class="secApp__extLinkImg">
                            </a>
                            <?php endif; ?>
                            <?php if($grp['url_android'] != ''): ?>
                            <a href="<?php echo $grp['url_android']; ?>" target="_blank" class="secApp__extLink">
                                <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/common/googlePlay.png" alt="Google Play" class="secApp__extLinkImg">
                            </a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php

if ($voicePostTerms_objArray && !is_wp_error($voicePostTerms_objArray)) {

    $term_ids = array();
    foreach ($voicePostTerms_objArray as $term) {
        $term_ids[] = $term->term_id;
    }
    
    $recommendQuery = [
        'post_type'      => 'voice',
        'posts_per_page' => 2,
        'orderby'        => [
            'date'  => 'DESC',
        ],
        'post__not_in'   => array($id),
        'tax_query'      => [
            [
                'taxonomy' => 'voice_cat',
                'field'    => 'term_id',
                'terms'    => $term_ids,
                'operator' => 'IN',
            ],
        ],
    ];
} else {
    $recommendQuery = [
        'post_type'      => 'voice',
        'posts_per_page' => 2,
        'orderby'        => [
            'date'  => 'DESC',
        ],
        'post__not_in'   => array($id),
    ];
}

$recommendPosts = new WP_Query($recommendQuery);
?>
<?php if ($recommendPosts->have_posts()): ?>
<section class="secRecommended">
    <div class="secRecommended__inner">
        <div class="secRecommended__cards">
            <div class="secRecommended__headerBadge">
                <div class="secRecommended__headerIcon">
                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/common/secRecommend_headerIcon.png"
                        alt="" />
                </div>
                <span class="secRecommended__headerText">あわせて読みたい</span>
            </div>
            <?php while ($recommendPosts->have_posts()): $recommendPosts->the_post(); ?>
            <a href="<?php echo get_the_permalink(); ?>" class="secRecommended__cardsItem">
                <div class="secRecommended__content">
                    <div class="secRecommended__title">
                        <strong class="secRecommended__titleName"><?php echo get_the_title(); ?></strong><span
                            class="secRecommended__titleSuffix">様</span>
                    </div>
                    <?php if (get_field('voice_desc') != ''): ?>
                        <p class="secRecommended__text"><?php echo get_field('voice_desc'); ?></p>
                    <?php endif; ?>
                </div>
                <?php if (has_post_thumbnail()): ?>
                    <div class="secRecommended__imageWrap">
                            <?php
                            $thumb_id = get_post_thumbnail_id(get_the_ID());

                            $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);

                            $thumb_src = wp_get_attachment_image_src($thumb_id, 'full'); 
                            $src = $thumb_src[0]; ?>
                            <?php echo '<img src="' . esc_url($src) . '" alt="' . esc_attr($alt) . '" class="secRecommended__image">'; ?>

                    </div>
                <?php endif; ?>
            </a>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php endif; ?>