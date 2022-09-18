<?php
add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );

function your_prefix_register_meta_boxes( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Social Media Links', 'online-generator' ),
        'id'         => 'social-links',
        'post_types' => ['bio_posttype'],
        'context'    => 'side',
        'priority'   => 'low',
        'fields'     => [
            [
                'type' => 'url',
                'name' => esc_html__( 'Facebook URL', 'online-generator' ),
                'id'   => $prefix . 'facebook_url',
            ],
            [
                'type' => 'url',
                'name' => esc_html__( 'Twitter URL', 'online-generator' ),
                'id'   => $prefix . 'twitter_url',
            ],
            [
                'type' => 'url',
                'name' => esc_html__( 'LinkedIn ULR', 'online-generator' ),
                'id'   => $prefix . 'linkedin_ulr',
            ],
        ],
    ];

    return $meta_boxes;
}

?>