<?php 

/**
 * Login API.
 */
add_action("rest_api_init","plz_api_login");

function plz_api_login(){
    register_rest_route(
        "plz",
        "login",
        array(
            "methods" => "POST",
            "callback" => "plz_login_callback"
        )
        );
}

/**
 * Callback of login.
 */
function plz_login_callback($request){
    $cred = array(
        "user_login" => $request["email"],
        "user_password" => $request["password"],
        "remember"  => true
    );

    $user = wp_signon($cred);

    return $user->get_error_message();
}

/**
 * Script of login.
 */
add_action("wp_enqueue_scripts", "plz_script_login");

function plz_script_login(){

    wp_register_script( "plz-login", PLZ_URL . 'public/assets/login.js' );

}