<?php
$postType = ( $post->post_type ); // Post Type
$postTypeName = get_post_type_object($postType)->label; // CPT Name
$currentTax_name = get_query_var ( 'taxonomy' ); // Current Taxonomy Name
$currentTax_obj = get_taxonomy ( $currentTax_name ); // Current Taxonomy Object
$currentTax_termsObjArray = get_terms( $currentTax_name ); // Current Taxonomy's all term's Object
$currentTerm_obj = get_term_by ( 'slug', $term, $currentTax_name ); // Current Term's object
$currentTerm_name = $currentTerm_obj->name; // Current Term's Name
$currentTerm_ID = $currentTerm_obj->term_id; // Current Term's ID
$currentTerm_slug = $currentTerm_obj->slug; // Current Term's Slug
$currentTerm_link = get_term_link($currentTerm_obj); // Current Term's Link
$currentTerm_postCount = $currentTerm_obj->count; // Current Term's Post count

$parentTerm_obj = get_term_by ( 'id', $currentTerm_obj->parent, $currentTax_name ); // Current Term's Parent's term's object
$parentTerm_name = $parentTerm_obj->name; // Current Term's Parent's term's Name
$parentTerm_link = get_term_link($parentTerm_obj); // Current Term's Parent's term's Link

$grandParentTerm_obj = get_term_by ( 'id', $parentTerm_obj->parent, $currentTax_name ); // Current Term's Grand Parent's term's object
$grandParentTerm_name = $grandParentTerm_obj->name; // Current Term's Grand Parent's term's Name
$grandParentTerm_link = get_term_link($grandParentTerm_obj); // Current Term's Grand Parent's term's Link

$childTerms_array = get_term_children ( $currentTerm_obj->term_id, $currentTax_name ); // Current Term's children's term's object's array


get_header();


//include locate_template('_inc/block/bread.php');


if ( locate_template( '_inc/tax/tax__' . $currentTax_name . '.php' ) ): // If there is incrude file
    include locate_template( '_inc/tax/tax__' . $currentTax_name . '.php' );
endif;


get_footer();
?>
