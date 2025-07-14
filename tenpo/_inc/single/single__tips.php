<?php
$id = get_the_ID();
$title = get_the_title();
$grp = get_field('tips_grp');
$tipsPostTerms_objArray = get_the_terms(get_the_ID(), 'tips_cat');
?>
<section class="secBox secTipBox">
    <div class="secBox__inner secTipBox__inner">
        <div class="secAppTip">
            <div class="secAppTip__inner">
                <div class="secAppTip__content">
                    <h2 class="secAppTip__title">
                        <?php echo get_the_title(); ?>
                    </h2>
                    <?php
                    if (!empty($tipsPostTerms_objArray) && !is_wp_error($tipsPostTerms_objArray)) :
                    foreach ($tipsPostTerms_objArray as $term) :
                        echo '<span class="secAppTip__tag">' . esc_html($term->name) . '</span>';
                    endforeach;
                    endif;
                    ?>
                    <p class="secAppTip__date"><?php echo get_the_date('Y.m.d'); ?></p>
                </div>
                <div class="secAppTip__imageWrap">
                    <?php if (has_post_thumbnail()): ?>
                        <?php
                        $thumb_id = get_post_thumbnail_id(get_the_ID());
                        $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                        $thumb_src = wp_get_attachment_image_src($thumb_id, 'full');
                        $src = $thumb_src[0]; ?>
                        <?php echo '<img src="' . esc_url($src) . '" alt="' . esc_attr($alt) . '" class="secAppTip__image">'; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="secAppTipDetail">
            <div class="secAppTipDetail__inner">
                <div class="secAppTipDetail__body">
                    <p class="secAppTipDetail__bodyCaseText"><?php echo get_field('tips_desc'); ?></p>
                    
                    <div class="secAppTipDetail__bodyCont">
                        <?php 

                        the_content(); 
                        ?>
                    </div>
                </div>
                <div class="secAppTipDetail__sidebar">
                    <?php
                    $sidebarQuery = [
                        'post_type' => 'tips',
                        'posts_per_page' => 3,
                        'post__not_in' => [$id],
                    ];
                    $sidebarPost = new WP_Query($sidebarQuery);
                    if ($sidebarPost->have_posts()): ?>
                        <div class="secAppTipDetail__sidebarItem">
                            <span class="secAppTipDetail__sidebarItemHd">他の記事を見る</span>
                            <div class="secAppTipDetail__articleList">
                                <?php while ($sidebarPost->have_posts()):
                                    $sidebarPost->the_post(); ?>
                                    <a href="<?php echo get_the_permalink(); ?>" class="secAppTipDetail__articleItem">
                                        <div class="secAppTipDetail__articleContent">
                                            <h3 class="secAppTipDetail__articleTitle"><?php echo get_the_title(); ?></h3>
                                        </div>
                                        <div class="secAppTipDetail__articleImage">
                                            <?php if (has_post_thumbnail()): ?>
                                                <?php
                                                $thumb_id = get_post_thumbnail_id(get_the_ID());
                                                $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                                                $thumb_src = wp_get_attachment_image_src($thumb_id, 'full');
                                                $src = $thumb_src[0]; ?>
                                                <?php echo '<img src="' . esc_url($src) . '" alt="' . esc_attr($alt) . '" class="secAppTipDetail__articleImageItem">'; ?>
                                            <?php endif; ?>
                                        </div>
                                    </a>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="secAppTipDetail__sidebarItem">
                        <span class="secAppTipDetail__sidebarItemHd">フリーワードで検索する</span>
                        <form action="<?php echo home_url('/tips/'); ?>" method="get"
                            class="secAppTipDetail__searchForm">
                            <div class="secAppTipDetail__searchBox">
                                <input type="text" name="query" placeholder="キーワードで探す"
                                    class="secAppTipDetail__searchBoxInput" />
                                <input type="submit" class="secAppTipDetail__searchBoxBtn" value=" ">
                            </div>
                        </form>
                    </div>

                    <?php
                    $terms = get_terms(array(
                        'taxonomy' => 'tips_cat',
                        'hide_empty' => false,
                    ));
                    ?>
                    <?php if ($terms): ?>
                        <div class="secAppTipDetail__sidebarItem">
                            <span class="secAppTipDetail__sidebarItemHd">タグから検索する</span>
                            <div class="secAppTipDetail__tagList">
                                <?php foreach ($terms as $cat): ?>
                                    <a href="<?php echo get_term_link($cat); ?>"
                                        class="secAppTipDetail__tagItem"><?php echo esc_html($cat->name); ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$current_post_id = get_the_ID();
$current_post_date = get_the_date('Y-m-d H:i:s', $current_post_id);

$prev_args = [
    'post_type' => 'tips',
    'posts_per_page' => 1,
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
    'date_query' => [
        [
            'before' => $current_post_date,
        ],
    ],
    'post__not_in' => [$current_post_id],
];
$prev_query = new WP_Query($prev_args);

$next_args = [
    'post_type' => 'tips',
    'posts_per_page' => 1,
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC',
    'date_query' => [
        [
            'after' => $current_post_date,
        ],
    ],
    'post__not_in' => [$current_post_id],
];
$next_query = new WP_Query($next_args);

$has_prev = $prev_query->have_posts();
$has_next = $next_query->have_posts();


if ($has_prev || $has_next): ?>
<section class="secTipsRecommended">
    <div class="secTipsRecommended__inner">
        <div class="secTipsRecommended__cards">
            <div class="secTipsRecommended__headerBadge">
                <div class="secTipsRecommended__headerIcon">
                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/common/secRecommend_headerIcon.png"
                        alt="" />
                </div>
                <span class="secTipsRecommended__headerText">あわせて読みたい</span>
            </div>
            
            <?php if ($has_prev): ?>
                <?php $prev_query->the_post(); ?>
                <?php if(get_permalink() != ''): ?>
                <a href="<?php echo get_permalink(); ?>" class="secTipsRecommended__card">
                    <div class="secTipsRecommended__content">
                        <p class="secTipsRecommended__text">
                            <?php echo get_the_title(); ?>
                        </p>
                    </div>
                    <div class="secTipsRecommended__imageWrap">
                        <?php if (has_post_thumbnail()): ?>
                            <?php
                            $thumb_id = get_post_thumbnail_id(get_the_ID());
                            $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                            $thumb_src = wp_get_attachment_image_src($thumb_id, 'full');
                            $src = $thumb_src[0]; ?>
                            <?php echo '<img src="' . esc_url($src) . '" alt="' . esc_attr($alt) . '">'; ?>
                        <?php endif; ?>
                    </div>
                </a>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            
            <?php if ($has_next): ?>
                <?php $next_query->the_post(); ?>
                <?php if(get_permalink() != ''): ?>
                <a href="<?php echo get_permalink(); ?>" class="secTipsRecommended__card">
                    <div class="secTipsRecommended__content">
                        <p class="secTipsRecommended__text">
                            <?php echo get_the_title(); ?>
                        </p>
                    </div>
                    <div class="secTipsRecommended__imageWrap">
                        <?php if (has_post_thumbnail()): ?>
                            <?php
                            $thumb_id = get_post_thumbnail_id(get_the_ID());
                            $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                            $thumb_src = wp_get_attachment_image_src($thumb_id, 'full');
                            $src = $thumb_src[0]; ?>
                            <?php echo '<img src="' . esc_url($src) . '" alt="' . esc_attr($alt) . '">'; ?>
                        <?php endif; ?>
                    </div>
                </a>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>