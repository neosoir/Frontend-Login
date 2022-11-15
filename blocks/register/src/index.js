import {registerBlockType} from "@wordpress/blocks";

registerBlockType('plz/register', {

    title: 'register',
    category: 'widgets',
    icon:   'admin-users',
    edit: () => <h2>Register</h2>,
    save: () => <h2>Register</h2>

});