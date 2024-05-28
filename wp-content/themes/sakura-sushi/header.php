<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAKURA SUSHI</title>
    <meta name="description" content="東京千代田区に店舗を構える寿司店、桜寿司。鮮度、米、技術にこだわった鮨、お造りが自慢。">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="email=no,telephone=no,address=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  </head>
  <body>
    <header class="header">
      <div class="header-container container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo2.png" alt="<?php bloginfo('name'); ?>" width="120" height="34">
        </a>
        <nav class="global-nav">
          <a href="<?php echo esc_url(home_url('/')); ?>#greeting">ご挨拶</a>
          <a href="<?php echo esc_url(home_url('/')); ?>#works">私たちのこだわり</a>
          <a href="<?php echo esc_url(home_url('/')); ?>#dishes">季節の逸品</a>
          <a href="<?php echo esc_url(home_url('/')); ?>menu/">お品書き</a>
          <a href="<?php echo esc_url(home_url('/')); ?>#company">店舗のご案内</a>
        </nav>
        <nav class="global-nav-en">
          <a href="<?php echo esc_url(home_url('/')); ?>#greeting">Greeting</a>
          <a href="<?php echo esc_url(home_url('/')); ?>#works">Works</a>
          <a href="<?php echo esc_url(home_url('/')); ?>#dishes">Seasonal Dishes</a>
          <a href="<?php echo esc_url(home_url('/')); ?>menu/">Menu</a>
          <a href="<?php echo esc_url(home_url('/')); ?>#company">Information</a>
        </nav>
      </div>
    <?php wp_head(); ?>
    </header>