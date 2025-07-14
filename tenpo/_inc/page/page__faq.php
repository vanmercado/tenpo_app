<?php 
set_query_var('hero_subtitle', ' 安心して導入いただくために');
set_query_var('hero_heading', 'よくあるご質問');
set_query_var('hero_desc1', '導入前によくいただくご質問をQ&A形式でまとめました。<br>機能、料金、運用に関する不安や疑問点をクリアにできます。');
include locate_template('_inc/block/lowerPageFv.php');
?>

<?php 
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); 
        the_content();
    endwhile;
endif;
?>