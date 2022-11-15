<?php

add_action( 'init', 'plz_register_blocks' );

function plz_register_blocks() {

    $assets_file = include_once PLZ_PLATH . 'blocks/register/build/index.asset.php';

    wp_register_script(
        'plz-register-block',
        PLZ_URL . 'blocks/register/build/index.js',
        $assets_file['dependencies'],
        $assets_file['version'],
    );

    register_block_type(
        'plz/register',
        [
            'editor_script' => 'plz-register-block'
        ]
    );
}