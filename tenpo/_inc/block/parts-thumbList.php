<?php
$thumbListLength = $content['thumbListLength']; // thumb column length
$thumbListClmWidth = 12 / $thumbListLength;
$thumbListLength_sp = $content['thumbListLength_sp']; // thumb column length
$thumbListClmWidth_sp = 12 / $thumbListLength_sp;
$thumbList = $content['thumbList']; // repeater field
?>
<div class="gridArea">
    <?php foreach ( $thumbList as $thumbClm ): ?>
        <?php
        $thumbList_thumb = $thumbClm['thumbList_thumb']; // thumb
        $thumbList_thumb_url = $thumbList_thumb['url'];
        $thumbList_thumb_alt = $thumbList_thumb['alt'];
        $thumbList_modal = $thumbClm['thumbList_modal']; // thumb has modal or not
        ?>
        <?php if ( $thumbList_modal ): ?>
            <figure class="gridArea__col u-col-<?php echo $thumbListClmWidth; ?> u-col-sp-<?php echo $thumbListClmWidth_sp; ?>">
                <a class="modalWrap" href="<?php echo $thumbList_thumb_url; ?>" data-fancybox="modal-sample">
                    <img src="<?php echo $thumbList_thumb_url; ?>" alt="<?php echo $thumbList_thumb_alt; ?>">
                    <span class="modalWrap__button">button</span>
                </a>
            </figure>
        <?php else: ?>
            <figure class="gridArea__col u-col-<?php echo $thumbListClmWidth; ?> u-col-sp-<?php echo $thumbListClmWidth_sp; ?>">
                <img src="<?php echo $thumbList_thumb_url; ?>" alt="<?php echo $thumbList_thumb_alt; ?>">
            </figure>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
