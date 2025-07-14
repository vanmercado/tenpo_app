<?php 
set_query_var('hero_subtitle', '現場で活きる実践的なアプローチ');
set_query_var('hero_heading', 'アプリ活用のヒント');
set_query_var('hero_desc1', 'アプリを使いこなして、お客様とのつながりをもっと深く。<br/>日々の運用に役立つヒントや工夫を、わかりやすくご紹介します。');
include locate_template('_inc/block/lowerPageFv.php');


$paged = get_query_var('paged') ? get_query_var('paged') : 1; // 現在のページを教える
?>

<section class="secCategoryNav">
  <div class="secCategoryNav__inner">
    <?php
    $terms = get_terms(array(
      'taxonomy' => 'tips_cat',
      'hide_empty' => false,
    ));
    ?>
    <ul class="secCategoryNav__list center">
      <li class="secCategoryNav__listItem">
        <?php
        // Active only if NOT on a taxonomy archive page
        $is_all_active = (!is_tax()) ? ' is-active' : '';
        ?>
        <a href="<?php echo get_post_type_archive_link('tips'); ?>" class="secCategoryNav__listItemLink <?php echo $is_all_active; ?>">All</a></li>
      <?php if ($terms): ?>
        <?php foreach ($terms as $cat): ?>
          <?php
          $is_active = (is_tax($cat->taxonomy) && get_queried_object_id() === $cat->term_id) ? ' is-active' : '';
          ?>
          <li class="secCategoryNav__listItem">
            <a href="<?php echo get_term_link($cat); ?>" class="secCategoryNav__listItemLink<?php echo $is_active; ?>">
              <?php echo esc_html($cat->name); ?>
            </a>
          </li>
        <?php endforeach; ?>
      <?php endif; ?>
    </ul>
    <form action="<?php echo home_url('/tips/'); ?>" method="get" class="secCategoryNav__searchBox">
      <input type="text" name="query" class="secCategoryNav__searchBoxInput" placeholder="キーワードで探す" />
      <input type="submit" class="secCategoryNav__searchBoxBtn" value=" ">
    </form>
  </div>
</section>

<?php

if (is_tax()):

  $query = [
    'post_type' => 'tips',
    'paged' => $paged,
    'posts_per_page' => 15,
    'orderby'        => [
      'date'  => 'DESC',
    ],
    'tax_query' => [
      'relation' => 'AND',
      [
        'taxonomy' => 'tips_cat',
        'field' => 'tax_id',
        'terms' => get_queried_object_id(),
      ],
    ],
  ];

elseif (isset($_GET['query'])):
  $query = [
    'post_type' => 'tips',
    'paged' => $paged,
    'posts_per_page' => 15,
    'orderby'        => [
      'date'  => 'DESC',
    ],
  ];
  $query['s'] = sanitize_text_field($_GET['query']);

else:
  $query = [
    'post_type' => 'tips',
    'paged' => $paged,
    'posts_per_page' => 15,
    'orderby'        => 'date',
    'order'          => 'DESC',
  ];
endif;

$tipsPost = new WP_Query($query);
?>

<?php if ($tipsPost->have_posts()): ?>
  <section class="secAppTips">
    <div class="secAppTips__inner">
      <ul class="secAppTips__list">
        <?php while ($tipsPost->have_posts()):
          $tipsPost->the_post(); ?>
        <li class="secAppTips__listItem">
          <a href="<?php echo get_the_permalink(); ?>" class="secAppTips__card">
            <div class="secAppTips__cardImageBox">
              <?php if (has_post_thumbnail()):
                $thumb_id = get_post_thumbnail_id(get_the_ID());
                $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                $thumb_src = wp_get_attachment_image_src($thumb_id, 'full');
                $src = $thumb_src[0];
                echo '<img src="' . esc_url($src) . '" alt="' . esc_attr($alt) . '" class="secAppTips__cardImage">';
              endif; ?>
            </div>

            <div class="secAppTips__cardTitleBox">
              <div class="secAppTips__cardDetails">
                <?php
                $tipsPostTerms_objArray = get_the_terms(get_the_ID(), 'tips_cat');
                if (!empty($tipsPostTerms_objArray) && !is_wp_error($tipsPostTerms_objArray)) :
                  foreach ($tipsPostTerms_objArray as $term) :
                    echo '<p class="secAppTips__cardDetailsLabel">' . esc_html($term->name) . '</p>';
                  endforeach;
                endif;
                ?>
                <span class="secAppTips__cardDetailsDate"><?php echo get_the_date('Y.m.d'); ?></span>
              </div>
              <h3 class="secAppTips__cardTitle"><?php echo get_the_title(); ?></h3>
            </div>
          </a>

          <?php endwhile; ?>
        </li>
      </ul>
    </div>
  </section>
  <?php if (function_exists('wp_pagenavi')  && $tipsPost->max_num_pages > 1): ?>
    <section class="secPagination">
      <div class="secPagination__inner">
        <?php wp_pagenavi(['query' => $tipsPost]); ?>
      </div>
    </section>
  <?php endif; ?>
  <?php else: ?>
<section class="secAppTips">
  <div class="secAppTips__inner">
    <p class="secAppTips__noPost">該当する投稿が見つかりませんでした。</p>
  </div>
</section>
<?php endif; ?>
<?php get_template_part('_inc/block/parts', 'inquiry');?>