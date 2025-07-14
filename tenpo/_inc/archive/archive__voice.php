<?php
// Lower
set_query_var('hero_subtitle', ' 利用者の声から見える効果');
set_query_var('hero_heading', 'お客様の声');
set_query_var('hero_desc1', '実際にアプリを導入いただいたお客様からのご感想をご紹介。<br/>使いやすさ、効果実感、サポート体制など、導入の決め手となったポイントが分かります。');
include locate_template('_inc/block/lowerPageFv.php');


$paged = get_query_var('paged') ? get_query_var('paged') : 1; // 現在のページを教える
?>
<section class="secCategoryNav">
  <div class="secCategoryNav__inner">
    <?php
    $terms = get_terms(array(
      'taxonomy' => 'voice_cat',
      'hide_empty' => false,
    ));
    ?>
    <ul class="secCategoryNav__list">
      <li class="secCategoryNav__listItem">
        <?php
        // Active only if NOT on a taxonomy archive page
        $is_all_active = (!is_tax()) ? ' is-active' : '';
        ?>
        <a href="<?php echo get_post_type_archive_link('voice'); ?>"
          class="secCategoryNav__listItemLink<?php echo $is_all_active; ?>">All</a>
      </li>
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

    <form action="<?php echo home_url('/voice/'); ?>" method="get" class="secCategoryNav__searchBox">
      <input type="text" name="query" class="secCategoryNav__searchBoxInput" placeholder="キーワードで探す" />
      <input type="submit" class="secCategoryNav__searchBoxBtn" value=" ">
    </form>
  </div>
</section>

<?php

if (is_tax()):
  $query = [
    'post_type'      => 'voice',
    'paged'          => $paged,
    'posts_per_page' => 10,
    'orderby'        => [
      'date'  => 'DESC',
    ],
    'tax_query'      => [
      [
        'taxonomy' => 'voice_cat',
        'field'    => 'term_id', // fixed from 'tax_id'
        'terms'    => get_queried_object_id(),
      ],
    ],
  ];

elseif (isset($_GET['query'])):
  $query = [
    'post_type'      => 'voice',
    'paged'          => $paged,
    'posts_per_page' => 10,
    'orderby'        => [
      'date'  => 'DESC',
    ],
    's'              => sanitize_text_field($_GET['query']),
  ];

else:
  $query = [
    'post_type'      => 'voice',
    'paged'          => $paged,
    'posts_per_page' => 10,
    'orderby'        => [
      'date'  => 'DESC',
    ],
  ];
endif;

$voicePost = new WP_Query($query);
?>

<?php if ($voicePost->have_posts()): ?>
  <section class="secTestimonials">
    <div class="secTestimonials__inner">
      <div class="secTestimonials__list">
        <?php while ($voicePost->have_posts()): $voicePost->the_post(); ?>
          <div class="secTestimonials__cardWrapper">

            <?php
            $voicePostTerms_objArray = get_the_terms(get_the_ID(), 'voice_cat');
            if (!empty($voicePostTerms_objArray) && !is_wp_error($voicePostTerms_objArray)) :
              echo '<div class="secTestimonials__cardCategories">';
              foreach ($voicePostTerms_objArray as $term) :
                echo '<a href="' . esc_url(get_term_link($term)) . '" class="secTestimonials__cardCategory">' . esc_html($term->name) . '</a>';
              endforeach;
              echo '</div>';
            endif;
            ?>

            <a href="<?php echo get_the_permalink(); ?>" class="secTestimonials__card">
              <div class="secTestimonials__cardImg">
                <?php if (has_post_thumbnail()):
                  $thumb_id = get_post_thumbnail_id(get_the_ID());
                  $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                  $thumb_src = wp_get_attachment_image_src($thumb_id, 'full');
                  $src = $thumb_src[0]; ?>
                  <img src="<?php echo esc_url($src); ?>" alt="<?php echo esc_attr($alt); ?>" class="secTestimonials__cardImgCont">
                <?php endif; ?>
              </div>

              <div class="secTestimonials__cardBox">
                <h3 class="secTestimonials__cardTitle">
                  <?php echo get_the_title(); ?><span class="secTestimonials__cardTitleSpan">様</span>
                </h3>

                <?php if (get_field('voice_desc')): ?>
                  <p class="secTestimonials__cardDescription"><?php echo get_field('voice_desc'); ?></p>
                <?php endif; ?>
              </div>
            </a>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>

  <?php if (function_exists('wp_pagenavi')  && $voicePost->max_num_pages > 1): ?>
    <section class="secPagination wow animate__animated animate__fadeInUp">
      <div class="secPagination__inner">
        <?php wp_pagenavi(['query' => $voicePost]); ?>
      </div>
    </section>
  <?php endif; ?>
<?php else: ?>
  <section class="secTestimonials wow animate__animated animate__fadeInUp">
    <div class="secTestimonials__inner">
      <p class="secTestimonials__noPost">該当する投稿が見つかりませんでした。</p>
    </div>
  </section>
<?php endif; ?>