<section class="secBox caseSingle">
  <div class="secBox__container">
    <div class="secBox__inner">
      <div class="secCase">
        <div class="secCase__column secCase__column--text">
          <div class="secCase__textContent">
            <div class="secCase__card">
              <div class="secCase__cardHeader">
                <?php
                  $terms = get_the_terms(get_the_ID(), 'case_cat');
                  if ($terms && !is_wp_error($terms)): ?>
                    <ul class="secCase__tagList">
                      <?php foreach ($terms as $term): ?>
                        <li class="secCase__tag"><?php echo esc_html($term->name); ?></li>
                      <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <div class="secCase__clientInfo">
                  <div class="secCase__clientStatus"><span class="secCase__clientDot"></span></div>
                  <h2 class="secCase__clientName">
                    <span class="secCase__clientText"><?php the_title(); ?></span>
                    <span class="secCase__clientSuffix">様</span>
                  </h2>
                </div>
                <?php if ($summary = get_field('case_appSummary')): ?>
                  <p class="secCase__summary"><?php echo esc_html($summary); ?></p>
                <?php endif; ?>
              </div>

              <div class="secCase__cardBody">
                <?php if (have_rows('case_issue')): ?>
                <div class="secCase__issue">
                  <h5 class="secCase__issueTitle">抱えていた課題</h5>
                  <ul class="secCase__issueList">
                    <?php while (have_rows('case_issue')): the_row(); ?>
                      <li class="secCase__issueItem"><?php the_sub_field('case_issueItem'); ?></li>
                    <?php endwhile; ?>
                  </ul>
                </div>
                <?php endif; ?>

                <?php if (have_rows('case_benefits')): ?>
                <div class="secCase__benefit">
                  <h5 class="secCase__benefitTitle">店舗アプリ導入の効果</h5>
                  <ul class="secCase__benefitList">
                    <?php while (have_rows('case_benefits')): the_row(); ?>
                      <li class="secCase__benefitItem"><?php the_sub_field('case_benefitsItem'); ?></li>
                    <?php endwhile; ?>
                  </ul>
                </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>

        <div class="secCase__column secCase__column--media">
          <div class="secCase__imageGroup">
            <?php
            $img1 = get_field('case_appimg01');
            $img2 = get_field('case_appimg02');
            if ($img1) echo '<img class="secCase__image" src="' . esc_url($img1['url']) . '" alt="' . esc_attr($img1['alt']) . '" />';
            if ($img2) echo '<img class="secCase__image" src="' . esc_url($img2['url']) . '" alt="' . esc_attr($img2['alt']) . '" />';
            ?>
          </div>
        </div>
      </div>

      <div class="secFeatureBlock">
        <div class="secFeatureBlock__layout">
          <?php if ($menu = get_field('case_menugroup')): ?>
          <div class="secFeatureBlock__panel">
            <div class="secFeatureBlock__header">
              <?php 
              $menu_text = $menu['case_menugroupname'];
              if ($menu_text): ?>
                  <h2 class="secFeatureBlock__title"><?php echo esc_html($menu_text); ?></h2>
              <?php endif; ?>
            </div>
            <div class="secFeatureBlock__body">
              <div class="secFeatureBlock__intro">
                <div class="secFeatureBlock__screenshots">
                  <?php
                  if (!empty($menu['case_menugrpimg01'])) {
                    echo '<img class="secFeatureBlock__screenshot" src="' . esc_url($menu['case_menugrpimg01']['url']) . '" alt="' . esc_attr($menu['case_menugrpimg01']['alt']) . '">';
                  }
                  ?>
                </div>
                <p class="secFeatureBlock__description"><?php echo esc_html($menu['case_menugrpdesc']); ?></p>
              </div>

              <?php if (!empty($menu['case_menugrpsubfield'])): ?>
              <div class="secFeatureBlock__featureGrid">
                <?php foreach ($menu['case_menugrpsubfield'] as $item): ?>
                <div class="secFeatureBlock__featureCard">
                  <div class="secFeatureBlock__imageGroup">
                    <?php
                    $placeholder_url = get_template_directory_uri() . '/_assets/images/common/placeholder.png';
                    
                    if (!empty($item['case_menusubimg']) && !empty($item['case_menusubimg']['url'])) {
                      $image_url = esc_url($item['case_menusubimg']['url']);
                      $image_alt = esc_attr($item['case_menusubimg']['alt'] ?? 'Menu feature image');
                    } else {
                      $image_url = esc_url($placeholder_url);
                      $image_alt = 'Menu feature image placeholder';
                    }
                    ?>
                    <img 
                      class="secFeatureBlock__featureImage" 
                      src="<?php echo $image_url; ?>" 
                      alt="<?php echo $image_alt; ?>"
                      onerror="this.onerror=null; this.src='<?php echo esc_url($placeholder_url); ?>'; this.alt='Image not available';"
                    >
                  </div>
                  <div class="secFeatureBlock__featureContent">
                    <h3 class="secFeatureBlock__featureTitle"><?php echo esc_html($item['case_menusubtitle']); ?></h3>
                    <p class="secFeatureBlock__featureDescription"><?php echo esc_html($item['case_menusubdesc']); ?></p>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <?php endif; ?>

          <?php if ($coupon = get_field('case_coupongroup')): ?>
          <div class="secFeatureBlock__panel">
            <div class="secFeatureBlock__header">
              <?php 
              $coupon_text = $coupon['case_coupongroupname'];
              if ($coupon_text): ?>
                  <h2 class="secFeatureBlock__title"><?php echo esc_html($coupon_text); ?></h2>
              <?php endif; ?>
            </div>
            <div class="secFeatureBlock__body">
              <div class="secFeatureBlock__intro">
                <div class="secFeatureBlock__screenshots">
                  <?php
                  if (!empty($coupon['case_couponimg'])) {
                    echo '<img class="secFeatureBlock__screenshot" src="' . esc_url($coupon['case_couponimg']['url']) . '" alt="' . esc_attr($coupon['case_couponimg']['alt']) . '">';
                  }
                  ?>
                </div>
                <p class="secFeatureBlock__description"><?php echo esc_html($coupon['case_coupondesc']); ?></p>
              </div>

              <?php if (!empty($coupon['case_couponsubfield'])): ?>
              <div class="secFeatureBlock__featureGrid">
                <?php foreach ($coupon['case_couponsubfield'] as $item): ?>
                <div class="secFeatureBlock__featureCard">
                  <div class="secFeatureBlock__imageGroup">
                    <?php
                    $placeholder_url = get_template_directory_uri() . '/_assets/images/common/placeholder.png';
                    
                    if (!empty($item['case_couponsubimg']) && !empty($item['case_couponsubimg']['url'])) {
                      $image_url = esc_url($item['case_couponsubimg']['url']);
                      $image_alt = esc_attr($item['case_couponsubimg']['alt'] ?? 'Coupon feature image');
                    } else {
                      $image_url = esc_url($placeholder_url);
                      $image_alt = 'Coupon feature image placeholder';
                    }
                    ?>
                    <img 
                      class="secFeatureBlock__featureImage" 
                      src="<?php echo $image_url; ?>" 
                      alt="<?php echo $image_alt; ?>"
                      onerror="this.onerror=null; this.src='<?php echo esc_url($placeholder_url); ?>'; this.alt='Image not available';"
                    >
                  </div>
                  <div class="secFeatureBlock__featureContent">
                    <h3 class="secFeatureBlock__featureTitle"><?php echo esc_html($item['case_couponsubtitle']); ?></h3>
                    <p class="secFeatureBlock__featureDescription"><?php echo esc_html($item['case_couponsubdesc']); ?></p>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>

      <?php get_template_part('_inc/block/parts', 'app'); ?>
    </div>
  </div>
</section>

<?php
$recommendQuery = array(
    'post_type' => 'case', 
    'posts_per_page' => 2,
    'post__not_in' => array(get_the_ID()),
    'orderby' => 'rand', 
    'post_status' => 'publish'
);

$recommendPosts = new WP_Query($recommendQuery);
?>
<?php if ($recommendPosts->have_posts()): ?>
<section class="secRecommended caseSingle">
    <div class="secRecommended__inner caseSingle">
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
                    <div class="secRecommended__title beforeHidden">
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