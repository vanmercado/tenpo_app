<?php 
//set_query_var('hero_subtitle', '成功事例から学ぶ活用法');
set_query_var('hero_heading', get_the_title());
set_query_var('hero_desc1', 'オンラインで導入ご検討の方やサービス詳細のご相談を受け付けております。<br>ご希望の場合、以下より、お打ち合わせ可能な日時を選択いただきご予約ください。

');
include locate_template('_inc/block/lowerPageFv.php');
?>
<?php 
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); 
        the_content();
    endwhile;
endif;
?>