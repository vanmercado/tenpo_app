<?php
$pageName = $post->post_title; // Current Page's Name
$pageID = $post->ID; // Current Page's ID
$pageSlug = $post->post_name; // Current Page's Slug

$parentPage_ID = $post->post_parent; // Current Page's Parent's Page's ID
$parentPage_obj = get_post($parentPage_ID); // Current Page's Parent's Page's object
$parentPage_name = $parentPage_obj->post_title; // Current Page's Parent's Page's Name
$parentPage_slug = $parentPage_obj->post_name; // Current Page's Parent's Page's Slug

$grandParentPage_ID = $parentPage_obj->post_parent; // Current Page's GrandParent's Page's ID
$grandParentPage_obj = get_post($grandParentPage_ID); // Current Page's GrandParent's Page's object
$grandParentPage_name = $grandParentPage_obj->post_title; // Current Page's GrandParent's Page's Name
$grandParentPage_slug = $grandParentPage_obj->post_name; // Current Page's GrandParent's Page's Slug

$args = [
    'post_parent' => $pageID,
    'post_type' => 'page'
];
$childPages_objArray = get_children( $args ); // Current Page's Children's Page's Object's Array


get_header();



if ( !$parentPage_ID ):
    include locate_template('_inc/page/temp/temp__pageLevel02.php'); // Lv.02
elseif ( $grandParentPage_ID ):
    include locate_template('_inc/page/temp/temp__pageLevel04.php'); // Lv.04
else:
    include locate_template('_inc/page/temp/temp__pageLevel03.php'); // Lv.03
endif;


get_footer();
?>
