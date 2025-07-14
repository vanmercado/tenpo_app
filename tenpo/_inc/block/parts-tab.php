<?php
$tabList = $content['tabList']; // tabList
$tabRandomNum = rand(); // for multi tab
?>

<div class="tabArea">
    <ul class="tabArea__btnList">
        <?php $tabLoopCounter = 1; ?>
        <?php foreach ( $tabList as $tabItem ): ?>
            <?php
            $tabList_btnText = $tabItem['tabList_btnText']; // button text
            if ( $tabLoopCounter == 1 ): // active on only the first tab
                $jsActiveClass = 'is-open';
            else:
                $jsActiveClass = null;
            endif;
            ?>
            <li class="tabArea__btnItem">
                <a href="javascript:void(0)" class="tabArea__btnLink js-btn <?php echo $jsActiveClass; ?>" data-btn="tab-<?php echo $tabRandomNum.'-'.$tabLoopCounter; ?>" data-btnGroup="tab-<?php echo $tabRandomNum; ?>" data-animation="tab"><?php echo $tabList_btnText; ?></a>
            </li>
            <?php $tabLoopCounter++; ?>
        <?php endforeach; ?>
    </ul>

    <ul class="tabArea__contentList">
        <?php $tabLoopCounter = 1; ?>
        <?php foreach ( $tabList as $tabItem ): ?>
            <?php
            $tabList_contents = $tabItem['tabList_contents']; // Contents inner Tab
            if ( $tabLoopCounter == 1 ): // active on only the first tab
                $jsActiveClass = 'is-open';
            else:
                $jsActiveClass = null;
            endif;
            ?>
            <li class="tabArea__contentItem <?php echo $jsActiveClass; ?>" data-target="tab-<?php echo $tabRandomNum.'-'.$tabLoopCounter; ?>" data-targetGroup="tab-<?php echo $tabRandomNum; ?>">
                <div class="visualEditArea">
                    <?php echo $tabList_contents; ?>
                </div>
            </li>
            <?php $tabLoopCounter++; ?>
        <?php endforeach; ?>
    </ul>
</div>
