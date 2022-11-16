<?php

add_action( 'init', 'plz_news_block_init' );

function plz_news_block_init() {

    register_block_type(

        __DIR__,
        [ 'render_callback' => 'plz_news_render_callback' ]

    );

}

/**
 * Callback.
 */
function plz_news_render_callback( $block_attributes, $block_content ) {

    $return = '<p class="wp-block-plz-news">Hola</p>';
    return $return;

}