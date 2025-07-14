<?php 
set_query_var('hero_subtitle', '専任スタッフがしっかりサポート');
set_query_var('hero_heading', 'お問い合わせ');
set_query_var('hero_desc1', '店舗アプリについてのご質問やご相談は、以下のフォームからお気軽にお問い合わせください。');
include locate_template('_inc/block/lowerPageFv.php');
?>

<section class="secContact bgWhite">
    <div class="secContact__inner width100">
        <h2 class="secContact__header u-spDb">お問い合わせ</h2>
        <span class="secContact__headerCap u-spDb">店舗アプリについてのご質問やご相談は、以下のフォームからお気軽にお問い合わせください。</span>
        <?php 
        while (have_posts()) : the_post();
            the_content();
        endwhile;
        ?>
    </div>
</section>