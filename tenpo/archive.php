<?php
$postType = ($post->post_type); // post type
$postTypeName = get_post_type_object($postType)->label; // CPT Name


get_header();


if ( locate_template( '_inc/archive/archive__' . $postType . '.php' ) ): // If there is incrude file
    include locate_template( '_inc/archive/archive__' . $postType . '.php' );

else:
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
endif;


get_footer();
?>
