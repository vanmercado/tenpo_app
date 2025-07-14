<?php 
set_query_var('hero_subtitle', '成功事例から学ぶ活用法');
set_query_var('hero_heading', '導入事例一覧');
set_query_var('hero_desc1', 'さまざまな業種・業態の企業での導入実績をご紹介。<br>導入の背景から、課題解決までのストーリーを通じて、アプリ活用のヒントが見つかります。');
include locate_template('_inc/block/lowerPageFv.php');

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
?> 

<section class="secCategoryNav">
    <div class="secCategoryNav__inner">
        <?php
        $terms = get_terms(array(
            'taxonomy' => 'case_cat',
            'hide_empty' => false,
            'orderby' => 'name',
            'order' => 'ASC'
        ));
        ?>
        
        <ul class="secCategoryNav__list">
            <li class="secCategoryNav__listItem">
                <?php
                $is_all_active = (!is_tax('case_cat') && !isset($_GET['query'])) ? ' is-active' : '';
                ?>
                <a href="<?php echo get_post_type_archive_link('case'); ?>"
                   class="secCategoryNav__listItemLink<?php echo $is_all_active; ?>">All</a>
            </li>
            
            <?php if ($terms && !is_wp_error($terms)): ?>
                <?php foreach ($terms as $cat): ?>
                    <?php
                    // Check if current category is active
                    $is_active = (is_tax('case_cat') && get_queried_object_id() === $cat->term_id) ? ' is-active' : '';
                    ?>
                    <li class="secCategoryNav__listItem">
                        <a href="<?php echo get_term_link($cat); ?>" 
                           class="secCategoryNav__listItemLink<?php echo $is_active; ?>">
                            <?php echo esc_html($cat->name); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>

        <form action="<?php echo get_post_type_archive_link('case'); ?>" method="get" class="secCategoryNav__searchBox">
            <input type="text" 
                   name="query" 
                   class="secCategoryNav__searchBoxInput" 
                   placeholder="キーワードで探す" />
            <input type="submit" class="secCategoryNav__searchBoxBtn" value=" ">
        </form>
    </div>
</section>

<section class="secCases">
    <div class="secCases__inner">
        <?php
        $args = array(
            'post_type' => 'case',
            'posts_per_page' => 15,
            'paged' => $paged,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC'
        );

        if (is_tax('case_cat')) {
            $current_term = get_queried_object();
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'case_cat',
                    'field' => 'term_id',
                    'terms' => $current_term->term_id,
                ),
            );
        }

        if (isset($_GET['query']) && !empty($_GET['query'])) {
            $args['s'] = sanitize_text_field($_GET['query']);
        }

        $case_query = new WP_Query($args);
        ?>
        
        <?php if ($case_query->have_posts()) : ?>
            <div class="secCases__list">
                <?php while ($case_query->have_posts()) : $case_query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="secCases__card">
                        <div class="secCases__cardImageBox">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium', [
                                    'class' => 'secCases__cardImage',
                                    'alt'   => get_the_title() ?: 'Case Image'
                                ]); ?>
                            <?php else : ?>
                                <?php 
                                $default_image = get_template_directory_uri() . '/_assets/images/cases/default-case-image.png';
                                $placeholder_image = get_template_directory_uri() . '/_assets/images/common/placeholder.png';
                                ?>
                                <img
                                    src="<?php echo esc_url($default_image); ?>"
                                    alt="<?php echo esc_attr(get_the_title() ?: 'No image available'); ?>"
                                    class="secCases__cardImage"
                                    onerror="this.onerror=null; this.src='<?php echo esc_url($placeholder_image); ?>'; this.alt='Image not found';"
                                />
                            <?php endif; ?>
                        </div>

                        <div class="secCases__cardTitleBox">
                            <div class="secCases__cardCategory">
                                <?php 
                                $case_categories = get_the_terms(get_the_ID(), 'case_cat');
                                
                                if ($case_categories && !is_wp_error($case_categories)) :
                                    foreach ($case_categories as $case_category) : ?>
                                        <p class="secCases__cardCategoryItem"><?php echo esc_html($case_category->name); ?></p>
                                    <?php endforeach;
                                endif;
                                ?>
                            </div>

                            <h3 class="secCases__cardTitle"><?php the_title(); ?><span class="secCases__cardTitleSpan">様</span></h3>
                        </div>
                    </a>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <div class="secCases__noResults">
                <?php if (isset($_GET['query']) && !empty($_GET['query'])) : ?>
                    <p>「<?php echo esc_html(sanitize_text_field($_GET['query'])); ?>」に該当する導入事例が見つかりませんでした。</p>
                    <p><a href="<?php echo get_post_type_archive_link('case'); ?>" class="secCases__backLink">すべての導入事例を見る</a></p>
                <?php elseif (is_tax('case_cat')) : ?>
                    <p>このカテゴリーには導入事例がありません。</p>
                    <p><a href="<?php echo get_post_type_archive_link('case'); ?>" class="secCases__backLink">すべての導入事例を見る</a></p>
                <?php else : ?>
                    <p>導入事例が見つかりませんでした。</p>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php if ($case_query->max_num_pages > 1) : ?>
<section class="secPagination">
    <div class="secPagination__inner">
        <?php if (function_exists('wp_pagenavi')): ?>
            <?php wp_pagenavi(['query' => $case_query]); ?>
        <?php else: ?>
            <ul class="secPagination__list">
                <?php
                $current_page = max(1, get_query_var('paged'));
                $total_pages = $case_query->max_num_pages;
                
                $base_url = '';
                if (is_tax('case_cat')) {
                    $base_url = get_term_link(get_queried_object());
                } else {
                    $base_url = get_post_type_archive_link('case');
                }
                
                $query_params = array();
                if (isset($_GET['query']) && !empty($_GET['query'])) {
                    $query_params['query'] = sanitize_text_field($_GET['query']);
                }
                
                function build_pagination_url($base_url, $page, $query_params = array()) {
                    if ($page > 1) {
                        if (strpos($base_url, '?') !== false) {
                            $url = $base_url . '&paged=' . $page;
                        } else {
                            $url = rtrim($base_url, '/') . '/page/' . $page . '/';
                        }
                    } else {
                        $url = $base_url;
                    }
                    
                    if (!empty($query_params)) {
                        $url = add_query_arg($query_params, $url);
                    }
                    
                    return $url;
                }
                
                if ($current_page > 1) : ?>
                    <li class="secPagination__item">
                        <a href="<?php echo build_pagination_url($base_url, $current_page - 1, $query_params); ?>" class="secPagination__link is-prev">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/_assets/images/svg/pagination__arrowLeft.png"
                                alt="Previous"
                            />
                        </a>
                    </li>
                <?php endif; ?>
                
                <?php
                $start_page = max(1, $current_page - 3);
                $end_page = min($total_pages, $current_page + 3);
                
                if ($start_page > 1) : ?>
                    <li class="secPagination__item">
                        <a href="<?php echo build_pagination_url($base_url, 1, $query_params); ?>" class="secPagination__link">1</a>
                    </li>
                    <?php if ($start_page > 2) : ?>
                        <li class="secPagination__item">
                            <span class="secPagination__dots">...</span>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
                
                <?php
                for ($i = $start_page; $i <= $end_page; $i++) : ?>
                    <li class="secPagination__item">
                        <?php if ($i == $current_page) : ?>
                            <span class="secPagination__link is-active"><?php echo $i; ?></span>
                        <?php else : ?>
                            <a href="<?php echo build_pagination_url($base_url, $i, $query_params); ?>" class="secPagination__link">
                                <?php echo $i; ?>
                            </a>
                        <?php endif; ?>
                    </li>
                <?php endfor; ?>
                
                <?php
                if ($end_page < $total_pages) : ?>
                    <?php if ($end_page < $total_pages - 1) : ?>
                        <li class="secPagination__item">
                            <span class="secPagination__dots">...</span>
                        </li>
                    <?php endif; ?>
                    <li class="secPagination__item">
                        <a href="<?php echo build_pagination_url($base_url, $total_pages, $query_params); ?>" class="secPagination__link"><?php echo $total_pages; ?></a>
                    </li>
                <?php endif; ?>
                
                <?php
                if ($current_page < $total_pages) : ?>
                    <li class="secPagination__item">
                        <a href="<?php echo build_pagination_url($base_url, $current_page + 1, $query_params); ?>" class="secPagination__link is-next">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/_assets/images/svg/pagination__arrowRight.png"
                                alt="Next"
                            />
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>

<?php
wp_reset_postdata();

?>