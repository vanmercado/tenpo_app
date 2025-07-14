<section class="secThank">
    <div class="secThank__innerArea">
        <h2 class="secThank__headerTtl">お問い合わせいただき誠にありがとうございます</h2>
        <p class="secThank__txt">
            確認のうえ、担当より改めてご連絡させていただきます。<br>通常、1〜2営業日以内にご返信させていただいております。<br>内容によっては少々お時間を頂戴する場合もございますが、何卒ご了承くださいませ。<br>ご入力いただいたメールアドレス宛に、自動返信メールをお送りしておりますので、あわせてご確認ください。</p>
    </div>
</section>

<?php
$tipsQuery = [
    'post_type' => 'tips',
    'posts_per_page' => 3,
    'orderby' => [
        'date' => 'DESC',
    ],
];

$tipsPost = new WP_Query($tipsQuery);
?>

<?php if ($tipsPost->have_posts()): ?>

<section class="secTips">
    <div class="secTips__inner">
        <h2 class="secTips__header wow animate__animated animate__fadeInUp">アプリ活用<span class="secTips__headerBlk">のヒント</span></h2>
        <p class="secTips__txt wow animate__animated animate__fadeInUp">アプリをもっと便利に使うためのコツやサービス追加された機能をご紹介します。</p>
        <ul class="secTips__list u-pcDb wow animate__animated animate__fadeInUp">
            <?php while ($tipsPost->have_posts()): $tipsPost->the_post(); ?>
            <li class="secTips__listItem">
                <a href="<?php echo get_the_permalink(); ?>" class="secTips__listItemLink">
                    <figure class="secTips__listItemFgr">
                        <?php if (has_post_thumbnail()): ?>
                            <?php
                            $thumb_id = get_post_thumbnail_id(get_the_ID());

                            // Get alt text
                            $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);

                            // Get src (image URL)
                            $thumb_src = wp_get_attachment_image_src($thumb_id, 'full'); // or 'full', 'thumbnail', etc.
                            $src = $thumb_src[0]; ?>
                            <?php echo '<img src="' . esc_url($src) . '" alt="' . esc_attr($alt) . '" class="secTips__listItemFgrImg">'; ?>
                        <?php else: ?>
                            <div class="secTips__listItemFgrImg"></div>
                        <?php endif; ?>
                    </figure>
                    <div class="secTips__listItemDesc">
                        <div class="secTips__listItemDescFlex">
                            <?php
                            $tipsPostTerms_objArray = get_the_terms(get_the_ID(), 'tips_cat');
                            $tipsPostTerm_obj = $tipsPostTerms_objArray[0];
                            $tipsPostTerm_name = $tipsPostTerm_obj->name;
                            ?>
                            <?php if ($tipsPostTerm_name != ''): ?>
                            <span class="secTips__listItemDescCat"><?php echo $tipsPostTerm_name; ?></span>
                            <?php endif; ?>
                            <span class="secTips__listItemDescDate"><?php echo get_the_date('Y.m.d'); ?></span>
                        </div>
                        <p class="secTips__listItemDescTxt"><?php echo get_the_title(); ?></p>
                    </div>
                </a>
            </li>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>
        
        <div class="secTips__swiperContainer wow animate__animated animate__fadeInUp common-swiper u-spDb">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-wrapper">
            <?php while ($tipsPost->have_posts()): $tipsPost->the_post(); ?>
                <div class="swiper-slide">
                    <div class="secTips__listItem">
                        <a href="<?php echo get_the_permalink(); ?>" class="secTips__listItemLink">
                            <figure class="secTips__listItemFgr">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php
                                    $thumb_id = get_post_thumbnail_id(get_the_ID());

                                    // Get alt text
                                    $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);

                                    // Get src (image URL)
                                    $thumb_src = wp_get_attachment_image_src($thumb_id, 'full'); // or 'full', 'thumbnail', etc.
                                    $src = $thumb_src[0]; ?>
                                    <?php echo '<img src="' . esc_url($src) . '" alt="' . esc_attr($alt) . '" class="secTips__listItemFgrImg">'; ?>
                                <?php else: ?>
                                    <div class="secTips__listItemFgrImg"></div>
                                <?php endif; ?>
                            </figure>
                            <div class="secTips__listItemDesc">
                                <div class="secTips__listItemDescFlex">
                                    <?php
                                    $tipsPostTerms_objArray = get_the_terms(get_the_ID(), 'tips_cat');
                                    $tipsPostTerm_obj = $tipsPostTerms_objArray[0];
                                    $tipsPostTerm_name = $tipsPostTerm_obj->name;
                                    ?>
                                    <?php if ($tipsPostTerm_name != ''): ?>
                                    <span class="secTips__listItemDescCat"><?php echo $tipsPostTerm_name; ?></span>
                                    <?php endif; ?>
                                    <span class="secTips__listItemDescDate"><?php echo get_the_date('Y.m.d'); ?></span>
                                </div>
                                <p class="secTips__listItemDescTxt"><?php echo get_the_title(); ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <a href="<?php echo home_url() ?>/tips" class="btnBlue secTips__btn wow animate__animated animate__fadeInUp">もっとみる</a>
    </div>
</section>

<?php endif; ?>