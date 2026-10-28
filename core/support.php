<?php
if (!function_exists('jdw_theme_support')) :
    function jdw_theme_support()
    {
        add_theme_support('title-tag'); // Otimiza Títulos para SEO
        add_theme_support('automatic-feed-links'); // Gerar links para o Feed
        add_theme_support('menus'); // Adiciona Suporte aos MENUS
        add_theme_support('responsive-embeds'); // Adiciona suporte ao embed responsivo
        add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script')); // Adiciona suporte ao HTML5

        // Configuração do Custom Logo dentro da action after_setup_theme
        add_theme_support('custom-logo', array(
            'height'      => 0,
            'width'       => 0,
            'flex-height' => true,
            'flex-width'  => true,
        ));
    }
    add_action('after_setup_theme', 'jdw_theme_support');
endif;
