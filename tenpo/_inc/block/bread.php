<?php
$breadCurrentPageName = null; // current Page Name
$breadCurrentPageLink = null; // current Page Link
$breadParentLv01PageName = null; // Parent Page Name
$breadParentLv01PageLink = null; // Parent Page Link
$breadParentLv02PageName = null; // GrandParent Page Name
$breadParentLv02PageLink = null; // GrandParent Page Link
$breadParentLv03PageName = null; // GrandParent Page Name
$breadParentLv03PageLink = null; // GrandParent Page Link

if ( is_page() ): // Fixed Page
    $breadCurrentPageName = $pageName;

    if ( !$parentPage_ID ): // Lv.02

    elseif ( $grandParentPage_ID ): // Lv.04
        $breadParentLv01PageName = $parentPage_name;
        $breadParentLv01PageLink = home_url() . '/' . $grandParentPage_slug . '/' . $parentPage_slug;
        $breadParentLv02PageName = $grandParentPage_name;
        $breadParentLv02PageLink = home_url() . '/' . $grandParentPage_slug;

    else: // Lv.03
        $breadParentLv01PageName = $parentPage_name;
        $breadParentLv01PageLink = home_url() . '/' . $parentPage_slug;
    endif;


elseif ( is_archive() ): // Archive Page (archive.php + taxonomy.php)
    if( is_tax() ): // taxonomy.php
        $breadCurrentPageName = $currentTerm_name;

        if ( $parentTerm_obj ): // 親タームがあったら
            if( $grandParentTerm_obj ): // 親の親タームがあったら
                $breadParentLv03PageName = $postTypeName;
                $breadParentLv03PageLink = home_url() . '/' . $postType;
                $breadParentLv02PageName = $grandParentTerm_name;
                $breadParentLv02PageLink = $grandParentTerm_link;
                $breadParentLv01PageName = $parentTerm_name;
                $breadParentLv01PageLink = $parentTerm_link;
            else:
                $breadParentLv02PageName = $postTypeName;
                $breadParentLv02PageLink = home_url() . '/' . $postType;
                $breadParentLv01PageName = $parentTerm_name;
                $breadParentLv01PageLink = $parentTerm_link;
            endif;

        else:
            $breadParentLv01PageName = $postTypeName;
            $breadParentLv01PageLink = home_url() . '/' . $postType;
        endif;
    else: // archive.php
        $breadCurrentPageName = $postTypeName;
    endif;


elseif ( is_single() ): // Single Page
    $breadCurrentPageName = $postTitle;
    $breadParentLv01PageName = $postTypeName;
    $breadParentLv01PageLink = home_url() . '/' . $postType;





elseif ( is_search() ): // Search Result Page
    if ( !( isset($_GET['s']) && empty($_GET['s']) ) ):
        $breadCurrentPageName = '検索結果「' . esc_html($s, 1) . '」';
    else:
        if ( isset($_GET['s']) && empty($_GET['s']) ):
            $breadCurrentPageName = '検索条件が入力されていません。';
        else:
            $breadCurrentPageName = '検索条件に一致しませんでした。';
        endif;
    endif;





 elseif ( is_404() ): // 404 Page
    $breadCurrentPageName = '404 Not found';
endif;
?>


<div class="breadArea">
    <div class="breadArea__innerArea">
        <ul class="breadArea__pageList">
            <li class="breadArea__pageItem">
                <a href="<?php echo home_url(); ?>/" class="breadArea__pageLink">保険見直し本舗トップ</a>
            </li>
            <?php if ( $breadParentLv03PageName && $breadParentLv03PageLink ): ?>
            <li class="breadArea__pageItem">
                <a href="<?php echo $breadParentLv03PageLink; ?>" class="breadArea__pageLink"><?php echo $breadParentLv03PageName; ?></a>
            </li>
            <?php endif; ?>
            <?php if ( $breadParentLv02PageName && $breadParentLv02PageLink ): ?>
            <li class="breadArea__pageItem">
                <a href="<?php echo $breadParentLv02PageLink; ?>" class="breadArea__pageLink"><?php echo $breadParentLv02PageName; ?></a>
            </li>
            <?php endif; ?>
            <?php if ( $breadParentLv01PageName && $breadParentLv01PageLink ): ?>
            <li class="breadArea__pageItem">
                <a href="<?php echo $breadParentLv01PageLink; ?>" class="breadArea__pageLink"><?php echo $breadParentLv01PageName; ?></a>
            </li>
            <?php endif; ?>
            <li class="breadArea__pageItem"><?php echo $breadCurrentPageName; ?></li>
        </ul>
    </div>
</div>
