<?php
$postType = $post->post_type; // Post Type
$postTypeName = get_post_type_object($postType)->label; // CPT Name
$postID = $post->ID; // Post ID
$postTitle = $post->post_title; // Post Title
$postTerms_objArray = get_the_terms($postID, 'taxonomyName'); // Post's term's object's array
$prevPost_obj = get_previous_post(); // Prev Post Object
$prevPost_link = get_permalink($prevPost_obj->ID); // Prev Post URL
$nextPost_obj = get_next_post(); // Next Post Object
$nextPost_link = get_permalink($nextPost_obj->ID); // Next Post URL


get_header();


if ( locate_template( '_inc/single/single__' . $postType . '.php' ) ): // If there is incrude file
    include locate_template( '_inc/single/single__' . $postType . '.php' );

else:
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
endif;


get_footer();
?>
