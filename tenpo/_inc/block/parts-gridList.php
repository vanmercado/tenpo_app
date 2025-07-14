<?php $gridList = $content['gridList']; // repeater field ?>
<ul class="gridArea">
    <?php foreach ( $gridList as $gridClm ): ?>
        <?php
        $gridList_clmWidth = $gridClm['gridList_clmWidth']; // item width (PC)
        $gridList_clmWidth_sp = $gridClm['gridList_clmWidth_sp']; // item width (SP)
        $gridList_clmItem = $gridClm['gridList_clmItem']; // item
        ?>
        <li class="gridArea__col u-col-<?php echo $gridList_clmWidth; ?> u-col-sp-<?php echo $gridList_clmWidth_sp; ?>">
            <div class="visualEditArea">
                <?php echo $gridList_clmItem; ?>
            </div>
        </li>
    <?php endforeach; ?>
</ul>
