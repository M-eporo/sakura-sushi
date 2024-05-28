<?php 
  function add_files() {
    wp_enqueue_style('google-font-noto-serif', 'https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap');
    wp_enqueue_style('google-font-arizonia', 'https://fonts.googleapis.com/css2?family=Arizonia&display=swap');
    wp_enqueue_style('google-font-great-vibes', 'https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');
    wp_enqueue_style('slick1', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('slick2', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css');
    wp_enqueue_style('main-style', get_theme_file_uri('/css/style.css'));
    wp_enqueue_script('jQuery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), '3.7', true);
    wp_enqueue_script('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jQuery'), '1.8', true);
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/c4f2b57994.js');
    wp_enqueue_script('menu-slider', get_theme_file_uri('/js/carousel.js'), array(), '', true);
    wp_enqueue_script('scroll-slow', get_theme_file_uri('/js/switchLanguage.js'), array(), '', true);
    wp_enqueue_script('slider', get_theme_file_uri('/js/fadeIn.js'), array(), '', true);
    wp_enqueue_script('scroll', get_theme_file_uri('/js/scroll-slow.js'), array(), '', true);
    wp_enqueue_script('text-anime', get_theme_file_uri('/js/fadeInLeftRight.js'), array(), '', true);
  }
  add_action('wp_enqueue_scripts', 'add_files');

  function theme_setup(){
    //titleタグ
    add_theme_support('title-tag');
  }
  add_action('after_setup_theme', 'theme_setup');