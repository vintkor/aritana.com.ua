<?php
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
add_theme_support('post-thumbnails');
remove_action('wp_head', 'wp_generator');

function custom_disable_embeds_init() {
    // Remove the REST API endpoint.
    remove_action('rest_api_init', 'wp_oembed_register_route');
    // Turn off oEmbed auto discovery.
    // Don't filter oEmbed results.
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
    // Remove oEmbed discovery links.
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    // Remove oEmbed-specific JavaScript from the front-end and back-end.
    remove_action('wp_head', 'wp_oembed_add_host_js');
}

//Убираем лишние теги
// remove_filter( 'the_content', 'wpautop' );// для контента
remove_filter( 'the_excerpt', 'wpautop' );// для анонсов
remove_filter( 'comment_text', 'wpautop' );// для комментарий


// --------------------Регистрация меню верхнее--------------------------------------
add_action('init', 'top_menu');
function top_menu() {
    register_nav_menus(array(
        'top-menu' => 'Меню сайта верхнее'
    ));
}

// --------------------Регистрация меню футер --------------------------------------
add_action('init', 'footer_menu');
function footer_menu() {
    register_nav_menus(array(
        'footer-menu' => 'Меню в футере основное'
    ));
}

// --------------------Виджет с телефонами на странице Контакты---------------------------
function phone_in_contact_page_text_widget_init() {
  register_sidebar( array(
    'name'          => 'Теефоны в контактах',
    'id'            => 'contact',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<span class="hidden">',
    'after_title'   => '</span>',
  ) );
}
add_action( 'widgets_init', 'phone_in_contact_page_text_widget_init' );


// --------------------Виджет для приглашения на тендер---------------------------
function tender_text_widget_init() {
  register_sidebar( array(
    'name'          => 'Виджет для приглашения на тендер',
    'id'            => 'tender',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<span class="hidden">',
    'after_title'   => '</span>',
  ) );
}
add_action( 'widgets_init', 'tender_text_widget_init' );
