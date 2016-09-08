<?php
add_theme_support('post-thumbnails');
remove_action('wp_head', 'wp_generator');

//Убираем лишние теги
remove_filter( 'the_content', 'wpautop' );// для контента
remove_filter( 'the_excerpt', 'wpautop' );// для анонсов
remove_filter( 'comment_text', 'wpautop' );// для комментарий