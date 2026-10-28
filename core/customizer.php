<?php

function jdw_customizer($wp_customize)
{

    ##########################################
    #	           Section Hero              #
    ##########################################
    $wp_customize->add_section('sec_hero', array(
        'title' => 'Hero', // Tab name
    ));

    $wp_customize->add_setting('set_bg_hero', array(
        'type'    => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control(
        $wp_customize,
        'ctrl_servicos_item1',
        array(
            'label'       => 'Imagem de fundo',
            'width'       => 2000,
            'height'      => 800,
            'section'     => 'sec_hero',
            'settings'    => 'set_bg_hero'
        )
    ));

    $wp_customize->add_setting('set_hero_title', array(
        'type'    => 'theme_mod',
        'default' => 'Rua Henrique Sammartino, 56 | 06600-160 - Jandira/SP',
    ));

    $wp_customize->add_control('crtl_hero_title', array(
        'label'       => 'Título do Hero',
        'section'     => 'sec_hero',
        'settings'    => 'set_hero_title',
        'type'        => 'text'
    ));

    $wp_customize->add_setting('set_hero_text', array(
        'type'    => 'theme_mod',
        'default' => 'Deixe seu cabelo e barba na régua com a barbearia mestre agende um horário em nosso Whatsapp',
    ));

    $wp_customize->add_control('crtl_hero_text', array(
        'label'       => 'Texto do Hero',
        'section'     => 'sec_hero',
        'settings'    => 'set_hero_text',
        'type'        => 'text'
    ));

    ##########################################
    #	         Section About               #
    ##########################################
    $wp_customize->add_section('sec_about', array(
        'title' => 'About', // Tab name
    ));

    $wp_customize->add_setting('set_about_subtitle', array(
        'type'    => 'theme_mod',
        'default' => 'Pellentesque blandit metus volutpat diam sollicitudin sed maximus metus maximus',
    ));

    $wp_customize->add_control('crtl_about_subtitle', array(
        'label'       => 'Subtítulo da seção',
        'section'     => 'sec_about',
        'settings'    => 'set_about_subtitle',
        'type'        => 'text'
    ));

    $wp_customize->add_setting('set_service_hours', array(
        'type'    => 'theme_mod',
        'default' => 'segunda | sexta-feira 08:00 - 19:00 sábado | domingo 08:00 - 21:00',
    ));

    $wp_customize->add_control('crtl_service_hours', array(
        'label'       => 'Horário de Atendimento',
        'section'     => 'sec_about',
        'settings'    => 'set_service_hours',
        'type'        => 'textarea'
    ));

    $wp_customize->add_setting('set_about_text', array(
        'type'    => 'theme_mod',
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis, magna vel maximus vestibulum,massa massa aliquet ipsum, dapibus semper quam risus eu nisl. Mauris ultricies ligula eu ipsum scelerisque, quis tincidunt est tempor',
    ));

    $wp_customize->add_control('crtl_about_text', array(
        'label'       => 'Texto sobre a empresa',
        'section'     => 'sec_about',
        'settings'    => 'set_about_text',
        'type'        => 'textarea'
    ));

    ##########################################
    #	         Section Services            #
    ##########################################
    $wp_customize->add_section('sec_services', array(
        'title' => 'Services', // Tab name
    ));

    $wp_customize->add_setting('set_services_subtitle', array(
        'type'    => 'theme_mod',
        'default' => 'Pellentesque blandit metus volutpat diam sollicitudin sed maximus metus maximus',
    ));

    $wp_customize->add_control('crtl_services_subtitle', array(
        'label'       => 'Subtítulo da seção',
        'section'     => 'sec_services',
        'settings'    => 'set_services_subtitle',
        'type'        => 'textarea'
    ));

    ##########################################
    #	         Section Contact             #
    ##########################################
    $wp_customize->add_section('sec_contact', array(
        'title' => 'Contact', // Tab name
    ));

    $wp_customize->add_setting('set_address', array(
        'type'    => 'theme_mod',
        'default' => 'Rua Henrique Sammartino, 56 | 06600-160 - Jandira/SP',
    ));
    $wp_customize->add_control('crtl_address', array(
        'label'       => 'Address',
        'section'     => 'sec_contact',
        'settings'    => 'set_address',
        'type'        => 'textarea'
    ));

    $wp_customize->add_setting('set_whatsapp', array(
        'type'    => 'theme_mod',
        'default' => '(11) 90000-0000',
    ));

    $wp_customize->add_control('crtl_whatsapp', array(
        'label'       => 'WhatsApp',
        'section'     => 'sec_contact',
        'settings'    => 'set_whatsapp',
        'type'        => 'text'
    ));

    $wp_customize->add_setting('set_instagram', array(
        'type'    => 'theme_mod',
        'default' => 'https://www.instagram.com/',
    ));

    $wp_customize->add_control('crtl_instagram', array(
        'label'       => 'Instagram',
        'section'     => 'sec_contact',
        'settings'    => 'set_instagram',
        'type'        => 'text'
    ));

    $wp_customize->add_setting('set_phone', array(
        'type'    => 'theme_mod',
        'default' => '(00) 0000-0000',
    ));

    $wp_customize->add_control('crtl_phone', array(
        'label'       => 'Phone',
        'section'     => 'sec_contact',
        'settings'    => 'set_phone',
        'type'        => 'text'
    ));
}

add_action('customize_register', 'jdw_customizer');
