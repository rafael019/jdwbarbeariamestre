<?php
function jdw_register_menu()
{
    register_nav_menus(
        array(
            'primary' => 'Menu Principal',
        )
    );
}
add_action('init', 'jdw_register_menu');
