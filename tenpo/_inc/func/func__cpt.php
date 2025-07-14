<?php
/*--------------------------------------------------------------
Define CPT
--------------------------------------------------------------*/
function create_post_type() {
    // CPT: NEWS
    $cptLabel = 'NEWS';
    $cptName = 'news';

    register_post_type (
        $cptName,
        [
            'labels' => [
                'name' => __( $cptLabel ),
                'singular_name' => __( $cptName ),
                'menu_name' => __( $cptLabel ),
                'name_admin_bar' => __( $cptLabel ),
            ],
            'public' => true,
            'supports' => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'revisions', 'page-attributes', 'post-formats'],
            'has_archive' => true,
        ]
    );

    // Taxonomy: NEWS Category
    register_taxonomy (
        $cptName . '_cat',
        $cptName,
        [
            'label' => 'NEWS Category',
            'labels' => [
                'menu_name' => 'NEWS Category',
            ],
            'hierarchical' => true,
            'show_ui' => true,
            'show_admin_column' => true,
        ]
    );
}
add_action( 'init', 'create_post_type' );
?>
