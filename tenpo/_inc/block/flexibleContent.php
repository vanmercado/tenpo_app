<?php
$flexibleContent = get_field('flexibleContent'); // flexible content array
?>

<!-- ↓ まだ動的にしてないパーツ -->
<?php include locate_template('_inc/block/lowerPageFv.php'); ?>
<!-- ↑ まだ動的にしてないパーツ -->

<?php if ( $flexibleContent ): ?>
    <div class="contentCenter">
        <?php
        foreach( $flexibleContent as $content ):
            $layout = $content['acf_fc_layout']; // layout name

            if ( $layout == 'layout_wysiwyg' ): // wysiwyg editor
                include locate_template('_inc/block/parts-wysiwygEditor.php');

            elseif ( $layout == 'layout_space' ): // Space
                include locate_template('_inc/block/parts-space.php');

            elseif ( $layout == 'layout_grid' ): // Grid Layout
                include locate_template('_inc/block/parts-gridList.php');

            elseif ( $layout == 'layout_thumbList' ): // Thumbnail List
                include locate_template('_inc/block/parts-thumbList.php');

            elseif ( $layout == 'layout_card' ): // Card Layout
                include locate_template('_inc/block/parts-card.php');

            elseif ( $layout == 'layout_postList' ): // Post List
                include locate_template('_inc/block/parts-postList.php');

            elseif ( $layout == 'layout_accordion' ): // Accordion
                include locate_template('_inc/block/parts-accordion.php');

            elseif ( $layout == 'layout_tab' ): // Tab
                include locate_template('_inc/block/parts-tab.php');
            endif;
        endforeach;
        ?>
    </div>
<?php endif; ?>
