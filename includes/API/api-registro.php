<?php 

/**
 * Register API.
 */
add_action("rest_api_init", "plz_api_registro");

function plz_api_registro(){

    register_rest_route(
        "plz",
        "registro",
        array(
            'methods' => 'POST', 
            'callback' => 'plz_registro_callback'
        )
    );

}

/**
 * Callback of register.
 */
function plz_registro_callback($request){

    $is_user_exist = get_user_by("login",$request["name"]);
    $is_email_exist = get_user_by("email",$request["email"]);

    if($is_user_exist){
        return array('msg' => "Ese usuario ya exite");
    }elseif($is_email_exist){
        return array('msg' => "Ya existe un usuario con ese email");
    }

    $args = array(
        "user_login" => $request["name"],
        "user_pass"  => $request["password"],
        "user_email" => $request["email"],
        "role"       => "editor"
    );

   $user =  wp_insert_user($args);

    return  array("msg" => "El usuario se registro correctamente");
}


/**
 * Script of register.
 */
add_action("wp_enqueue_scripts", "plz_script_registro");

function plz_script_registro(){

    wp_register_script( "plz-registro", PLZ_URL . 'public/assets/js/registro.js');

    wp_localize_script(

        'plz-registro',
        'homeUrl',
        home_url()

    );
}
