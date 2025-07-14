<?php
$cardListClmLength = $content['cardListClmLength']; // Card Length (PC)
$cardListClmWidth = 12 / $cardListClmLength;
$cardListClmLength_sp = $content['cardListClmLength_sp']; // Card Length (SP)
$cardListClmWidth_sp = 12 / $cardListClmLength_sp;
$cardOutput = $content['cardOutput']; // output(loop, manualArticleList, manualCardList)
?>
<?php if ( $cardOutput == 'loop' ): ?>
    <?php
    $loop = $content['loop']; // cpt type
    $loopLimit = $content['loopLimit']; // article item length limit
    ?>
    <?php
    $args = [
        'post_type' => $loop,
        'posts_per_page' => $loopLimit,
        'order' => 'DESC',
        'orderby' => 'date',
    ];
    $wp_query = new WP_Query( $args );
    ?>
        <?php if ( have_posts() ): ?>
            <ul class="gridArea">
                <?php while ( have_posts() ): the_post(); ?>
                    <li class="gridArea__col u-col-<?php echo $cardListClmWidth; ?> u-col-sp-<?php echo $cardListClmWidth_sp; ?>">
                        <p style="font-size: 20px; color: #f0f;">アイキャッチ設定する</p>
                        <a href="<?php echo get_permalink(); ?>" class="card">
                            <figure class="card__thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/common/sample.jpg" alt="sample" class="card__thumbImg">
                            </figure>
                            <div class="card__textArea">
                                <time class="card__time" datetime="<?php echo get_the_time('Y-m-d'); ?>"><?php echo get_the_time('Y/m/d'); ?></time>
                                <p class="card__postTitle"><?php echo get_the_title(); ?></p>
                            </div>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    <?php wp_reset_query(); ?>

<?php elseif ( $cardOutput == 'manualArticleList' ): ?>
    <?php $manualArticleList = $content['manualArticleList']; // article list ?>
    <ul class="gridArea">
        <?php foreach ( $manualArticleList as $manualArticleItem ): ?>
            <?php $manualArticleItem_title = $manualArticleItem->post_title; // post title ?>
            <li class="gridArea__col u-col-<?php echo $cardListClmWidth; ?> u-col-sp-<?php echo $cardListClmWidth_sp; ?>">
                <p style="font-size: 20px; color: #f0f;">アイキャッチ設定する</p>
                <a href="<?php echo get_permalink($manualArticleItem); ?>" class="card">
                    <figure class="card__thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/common/sample.jpg" alt="sample" class="card__thumbImg">
                    </figure>
                    <div class="card__textArea">
                        <time class="card__time" datetime="<?php echo get_the_time('Y-m-d', $manualArticleItem); ?>"><?php echo get_the_time('Y/m/d', $manualArticleItem); ?></time>
                        <p class="card__postTitle"><?php echo $manualArticleItem_title; ?></p>
                    </div>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

<?php elseif ( $cardOutput == 'manualCardList' ): ?>
    <?php $manualCardList = $content['manualCardList']; // card list repeater field ?>
    <ul class="gridArea">
        <?php foreach ( $manualCardList as $manualCardItem ): ?>
            <?php
            $manualCardList_time = $manualCardItem['manualCardList_time']; // time
            $manualCardList_title = $manualCardItem['manualCardList_title']; // title
            $manualCardList_thumb = $manualCardItem['manualCardList_thumb']; // thumb
            $manualCardList_thumb_url = $manualCardList_thumb['url'];
            $manualCardList_thumb_alt = $manualCardList_thumb['alt'];
            $manualCardList_link = $manualCardItem['manualCardList_link']; // link
            $manualCardList_link_url = $manualCardList_link['url'];
            $manualCardList_link_target = $manualCardList_link['target'];
            ?>
            <li class="gridArea__col u-col-<?php echo $cardListClmWidth; ?> u-col-sp-<?php echo $cardListClmWidth_sp; ?>">
                <a href="<?php echo $manualCardList_link_url; ?>" class="card" target="<?php echo $manualCardList_link_target; ?>">
                    <figure class="card__thumb">
                        <img src="<?php echo $manualCardList_thumb_url; ?>" alt="<?php echo $manualCardList_thumb_alt; ?>" class="card__thumbImg">
                    </figure>
                    <div class="card__textArea">
                        <time class="card__time" datetime="<?php echo $manualCardList_time; ?>"><?php echo $manualCardList_time; ?></time>
                        <p class="card__postTitle"><?php echo $manualCardList_title; ?></p>
                    </div>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

<?php endif; ?>
