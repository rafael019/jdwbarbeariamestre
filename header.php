<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <?php
    $bgDefault = INCLUDE_PATH . '/src/img/intro-bg.jpg';
    $bgImage = get_theme_mod('set_bg_hero');
    if ($bgImage) {
        $bgUrl = wp_get_attachment_image_url($bgImage, 'full');
    } else {
        $bgUrl = $bgDefault;
    }
    ?>

    <header class="hero-bg" id="top" style="background-image: url('<?php echo esc_url($bgUrl); ?>');">
        <div class="topo container">
            <a href="<?php echo home_url(); ?>">
                <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                if (has_custom_logo()) {
                    echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                } else {
                    echo '<h2>' . get_bloginfo('name') . '</h2>';
                } ?>
            </a>
            <?php
            wp_nav_menu(array(
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'nav',
                'menu_class'        => 'menu font-2-m cor-c2',
            ));
            ?>
        </div>
        <div class="">
            <div class="hero container">
                <div class="hero-content">
                    <h1 class="font-1-xl cor-b1"><?php echo get_theme_mod('set_hero_title'); ?></h1>
                    <p class="font-2-m cor-b1"><?php echo get_theme_mod('set_hero_text'); ?></p>
                    <a href="#contact" class="btn-main">Clique aqui para agendar</a>
                </div>
            </div>
        </div>
    </header>
    <main>