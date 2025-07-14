<?php get_header(); ?>



<section class="searchPageContentSec">
    <div class="searchPageContentSec__innerArea">
        <?php if ( $s ): // There is some search keyword ?>
            <h1 class="searchPageContentSec__pageTitle">「<?php echo esc_html($s, 1); ?>」の検索結果</h1>

            <?php
            $args = [
                'posts_per_page' => -1,
                'order' => 'DESC',
                'orderby' => 'date',
                's' => $s,
            ];
            $wp_query = new WP_Query( $args );
            ?>
                <?php if ( have_posts() ) : // There is result of search ?>
                    <h2 class="searchPageContentSec__title">全<?php echo $wp_query->found_posts; ?>件</h2>

                    <ul class="postListA">

                        <?php while ( have_posts() ) : the_post(); ?>
                            <li class="postListA__item">
                                <a href="<?php echo get_permalink(); ?>" class="postListA__link">
                                    <time datetime="<?php echo get_the_time('Y.m.d'); ?>" class="postListA__time"><?php echo get_the_time('Y/m/d'); ?></time>
                                    <p class="postListA__title"><?php echo get_the_title(); ?></p>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>

                <?php else: // No result of search ?>
                    <h2 class="searchPageContentSec__title">全0件</h2>

                    <div class="searchPageContentSec__bnrArea">
                        <a href="<?php echo home_url(); ?>" class="searchPageContentSec__bnr">トップページへ戻る</a>
                    </div>
                <?php endif; ?>
            <?php wp_reset_query(); ?>

        <?php else: // Empty search keywords ?>
            <h1 class="searchPageContentSec__pageTitle">検索条件が入力されていません。</h1>

            <div class="searchPageContentSec__bnrArea">
                <a href="<?php echo home_url(); ?>" class="searchPageContentSec__bnr">トップページへ戻る</a>
            </div>
        <?php endif; ?>
    </div>
</section>




<?php get_footer(); ?>
